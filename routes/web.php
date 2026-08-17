<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\SuperadminAuthController;
use App\Http\Controllers\Auth\TenantAuthController;
use App\Http\Controllers\DashboardController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

$rootDomain = config('app.url_domain');

/**
 * @param  callable(): void  $routes
 */
$registerCentralRoutes = function (callable $routes) use ($rootDomain): void {
    if (app()->isLocal() && in_array($rootDomain, ['localhost', '127.0.0.1'], true)) {
        Route::group([], $routes);

        return;
    }

    Route::domain($rootDomain)->group($routes);
};

$registerCentralRoutes(function (): void {
    Route::get('/', function () {
        if (auth()->check()) {
            if (auth()->user()->hasRole('Superadmin')) {
                return redirect()->route('superadmin.dashboard');
            }

            $company = Company::query()->find(auth()->user()->company_id);

            if ($company !== null) {
                return redirect()->route('tenant.dashboard', ['subdomain' => $company->subdomain]);
            }
        }

        return view('welcome');
    })->name('landing');
    Route::view('/signup', 'welcome')->name('tenant.register');
    Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])
        ->name('superadmin.google.login');
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])
        ->name('auth.google.callback');
    Route::get('/superadmin/login', [SuperadminAuthController::class, 'create'])
        ->name('superadmin.login');
    Route::post('/superadmin/login', [SuperadminAuthController::class, 'store'])
        ->name('superadmin.login.store');
    Route::middleware(['auth', 'role:Superadmin'])->group(function (): void {
        Route::get('/superadmin/dashboard', [DashboardController::class, 'superadmin'])
            ->name('superadmin.dashboard');

        Route::post('/superadmin/logout', [SuperadminAuthController::class, 'destroy'])
            ->name('superadmin.logout');
    });
});

Route::domain('{subdomain}.'.$rootDomain)
    ->middleware('tenant')
    ->group(function (): void {
        Route::get('/login', [TenantAuthController::class, 'create'])
            ->name('tenant.login');
        Route::post('/login', [TenantAuthController::class, 'store'])
            ->name('tenant.login.store');
        Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])
            ->name('tenant.google.login');

        Route::middleware(['auth', 'tenant.authenticated'])->group(function (): void {
            Route::get('/dashboard', [DashboardController::class, 'tenant'])
                ->name('tenant.dashboard');

            Route::post('/logout', [TenantAuthController::class, 'destroy'])
                ->name('tenant.logout');
        });
    });
