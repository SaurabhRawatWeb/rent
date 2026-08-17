<?php

use App\Http\Middleware\EnsureTenantUserBelongsToTenant;
use App\Http\Middleware\VerifyTenantMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Spatie\Permission\Middleware\RoleMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectGuestsTo(function (Request $request): string {
            $subdomain = $request->route('subdomain');

            if (is_string($subdomain) && $subdomain !== '') {
                return route('tenant.login', ['subdomain' => $subdomain]);
            }

            return route('superadmin.login');
        });

        $middleware->alias([
            'role' => RoleMiddleware::class,
            'tenant' => VerifyTenantMiddleware::class,
            'tenant.authenticated' => EnsureTenantUserBelongsToTenant::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
