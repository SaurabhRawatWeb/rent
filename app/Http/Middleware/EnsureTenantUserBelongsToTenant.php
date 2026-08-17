<?php

namespace App\Http\Middleware;

use App\Helpers\TenantHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureTenantUserBelongsToTenant
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $company = TenantHelper::getCompany();

        if ($user === null || $company === null) {
            return redirect()->route('tenant.login');
        }

        if ($user->hasRole('Superadmin') || (int) $user->company_id !== (int) $company->id) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            abort(403, 'You are not allowed to access this company workspace.');
        }

        return $next($request);
    }
}
