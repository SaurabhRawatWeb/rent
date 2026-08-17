<?php

namespace App\Scopes;

use App\Helpers\TenantHelper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class TenantGlobalScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        // 1. Bypass during artisan commands, seeders, or console tasks
        if (app()->runningInConsole()) {
            return;
        }

        // 2. Check if a user is already loaded in memory and if they are a Superadmin
        // Using Auth::hasUser() prevents Auth from triggering a database re-query
        if (Auth::hasUser()) {
            $user = Auth::user();
            if ($user->company_id === null && $user->hasRole('Superadmin')) {
                return;
            }
        }

        // 3. Resolve active tenant company
        $company = TenantHelper::getCompany();

        if ($company === null) {
            return;
        }

        $builder->where($model->getTable().'.company_id', $company->id);
    }
}