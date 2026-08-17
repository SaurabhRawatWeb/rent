<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DemoTenantSeeder extends Seeder
{
    public function run(): void
    {
        $company = Company::query()->updateOrCreate(
            ['subdomain' => 'demo'],
            [
                'uuid' => (string) Str::uuid(),
                'name' => 'Demo Rentals',
                'slug' => 'demo-rentals',
                'email' => 'admin@demo-rentals.test',
                'status' => 'active',
                'is_active' => true,
            ],
        );

        $this->createTenantUser($company, 'Demo Company Admin', 'admin@demo-rentals.test', 'Company Admin');
        $this->createTenantUser($company, 'Demo Staff', 'staff@demo-rentals.test', 'Company Staff');
        $this->createTenantUser($company, 'Demo User', 'user@demo-rentals.test', 'Company User');
    }

    private function createTenantUser(Company $company, string $name, string $email, string $role): void
    {
        $user = User::withoutGlobalScopes()->updateOrCreate(
            ['email' => $email],
            [
                'company_id' => $company->id,
                'name' => $name,
                'password' => Hash::make('Password@123'),
                'email_verified_at' => now(),
            ],
        );

        $user->syncRoles([$role]);
    }
}
