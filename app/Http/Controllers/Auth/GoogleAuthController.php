<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\TenantHelper;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle(Request $request): RedirectResponse
    {
        $company = TenantHelper::getCompany();

        if ($company !== null) {
            $request->session()->put('oauth_tenant_id', $company->id);
        } else {
            $request->session()->forget('oauth_tenant_id');
        }

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request): RedirectResponse
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (InvalidStateException) {
            $request->session()->forget('oauth_tenant_id');

            return redirect()
                ->route('superadmin.login')
                ->withErrors([
                    'email' => 'Google sign-in expired. Please start again from the login page.',
                ]);
        }

        $tenantId = $request->session()->pull('oauth_tenant_id');

        $user = User::withoutGlobalScopes()
            ->where('google_id', $googleUser->getId())
            ->orWhere('email', $googleUser->getEmail())
            ->first();

        if ($user !== null) {
            $this->validateTenantAccess($user, $tenantId);

            $user->forceFill([
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
            ])->save();
        } elseif ($tenantId !== null) {
            $user = User::withoutGlobalScopes()->create([
                'company_id' => $tenantId,
                'name' => $googleUser->getName() ?: $googleUser->getNickname() ?: $googleUser->getEmail(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'password' => null,
            ]);

            $user->assignRole('Company User');
        } else {
            return redirect()
                ->route('superadmin.login')
                ->withErrors([
                    'email' => 'No platform account is linked to this Google identity.',
                ]);
        }

        Auth::login($user, true);
        $request->session()->regenerate();

        if ($user->company_id === null && $user->hasRole('Superadmin')) {
            return redirect()->intended(route('superadmin.dashboard'));
        }

        $company = Company::query()->find($user->company_id);

        abort_if($company === null, 403);

        return redirect()->intended(route('tenant.dashboard', [
            'subdomain' => $company->subdomain,
        ]));
    }

    private function validateTenantAccess(User $user, mixed $tenantId): void
    {
        if ($user->company_id === null && $user->hasRole('Superadmin')) {
            return;
        }

        abort_if($tenantId === null, 403, 'Tenant users must sign in from their company subdomain.');
        abort_if((int) $user->company_id !== (int) $tenantId, 403, 'This Google account belongs to another company.');
    }
}
