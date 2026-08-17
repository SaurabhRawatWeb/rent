<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\TenantHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class TenantAuthController extends Controller
{
    public function create(): View|RedirectResponse
    {
        if (TenantHelper::isSuperadmin()) {
            return redirect()->route('superadmin.dashboard');
        }

        $user = Auth::user();
        $company = TenantHelper::getCompany();

        if ($user !== null && $company !== null && (int) $user->company_id === (int) $company->id) {
            return redirect()->route('tenant.dashboard');
        }

        return view('welcome');
    }

    public function store(Request $request): RedirectResponse
    {
        $company = TenantHelper::getCompany();

        abort_if($company === null, 404);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();
        $user = $request->user();

        if ($user === null || $user->company_id !== $company->id || $user->hasRole('Superadmin')) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return redirect()->intended(route('tenant.dashboard'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('tenant.login');
    }
}
