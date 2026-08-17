<?php

namespace App\Http\Controllers;

use App\Helpers\TenantHelper;
use App\Models\Company;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superadmin(Request $request): View|RedirectResponse
    {
        $user = $request->user();

        if ($user === null) {
            return redirect()->route('superadmin.login');
        }

        return view('dashboards.superadmin', [
            'user' => $user,
            'companyCount' => Company::query()->count(),
            'activeCompanyCount' => Company::query()->where('is_active', true)->count(),
            'userCount' => User::withoutGlobalScopes()->count(),
        ]);
    }

    public function tenant(Request $request): View|RedirectResponse
    {
        $user = $request->user();
        $company = TenantHelper::getCompany();

        if ($user === null || $company === null) {
            return redirect()->route('tenant.login');
        }

        $dashboard = match (true) {
            $user->hasRole('Company Admin') => 'dashboards.company-admin',
            $user->hasRole('Company Staff') || $user->hasRole('Staff') => 'dashboards.company-staff',
            default => 'dashboards.company-user',
        };

        return view($dashboard, [
            'user' => $user,
            'company' => $company,
        ]);
    }
}
