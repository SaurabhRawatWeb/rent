<?php

namespace App\Traits;

use App\Helpers\TenantHelper;
use App\Scopes\TenantGlobalScope;

trait BelongsToTenant
{
    protected static function bootBelongsToTenant(): void
    {
        static::addGlobalScope(new TenantGlobalScope);

        static::creating(function ($model): void {
            if (TenantHelper::isSuperadmin() || ! empty($model->company_id)) {
                return;
            }

            $company = TenantHelper::getCompany();

            if ($company !== null) {
                $model->company_id = $company->id;
            }
        });
    }
}
