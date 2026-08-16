<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
            [
                'email' => 'superadmin@rentlogix.com',
            ],
            [
                'name' => 'Super Admin',
                'company_id' => null,
                'password' => Hash::make('SuperAdmin@123'),
                'email_verified_at' => now(),
            ]
        );

        $user->syncRoles(['super-admin']);
    }
}
