<?php

namespace App\Helpers;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class TenantHelper
{
    public static function getCompany(): ?Company
    {
        if (app()->bound('tenant')) {
            return app('tenant');
        }

        $subdomain = request()->route('subdomain');

        if (! is_string($subdomain) || $subdomain === '') {
            return null;
        }

        // Use withoutGlobalScopes to prevent Company queries from hitting scopes
        $company = Company::withoutGlobalScopes()
            ->where('subdomain', $subdomain)
            ->where('is_active', true)
            ->first();

        if ($company !== null) {
            app()->instance('tenant', $company);
        }

        return $company;
    }

    public static function isSuperadmin(): bool
    {
        if (! Auth::hasUser()) {
            return false;
        }

        $user = Auth::user();

        return $user->company_id === null && $user->hasRole('Superadmin');
    }
}