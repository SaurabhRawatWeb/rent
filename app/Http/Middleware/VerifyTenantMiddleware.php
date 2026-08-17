<?php

namespace App\Http\Middleware;

use App\Models\Company;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class VerifyTenantMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $subdomain = $request->route('subdomain');

        abort_unless(is_string($subdomain) && $subdomain !== '', 404);

        $company = Company::query()
            ->where('subdomain', $subdomain)
            ->where('is_active', true)
            ->first();

        abort_if($company === null, 404);

        app()->instance('tenant', $company);
        URL::defaults(['subdomain' => $subdomain]);

        return $next($request);
    }
}
