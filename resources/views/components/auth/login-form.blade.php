<div class="mb-4">

    <div
        class="d-flex align-items-center gap-2 text-dark-blue fw-bold text-uppercase mb-2"
        style="font-size:10px;letter-spacing:1.5px;"
    >
        <span>━</span>
        Secure Client Access
    </div>

    <h1 class="login-title fs-2 fw-bold text-dark mb-2">
        Welcome Back
    </h1>

    <p
        class="login-description text-secondary mb-0"
        style="font-size:13px;"
    >
        Enter your email and password to access your account
    </p>

</div>

@php
    $subdomain = request()->route('subdomain');
    $isTenantRoute = is_string($subdomain) && $subdomain !== '';
    $loginRoute = $isTenantRoute ? route('tenant.login.store') : route('superadmin.login.store');
    $googleRoute = $isTenantRoute ? route('tenant.google.login') : route('superadmin.google.login');
@endphp

@if ($errors->any())
    <div class="alert alert-danger rounded-2 py-2" style="font-size: 13px;">
        {{ $errors->first() }}
    </div>
@endif

<form action="{{ $loginRoute }}" method="POST">

    @csrf

    <div class="mb-3">

        <label
            for="email"
            class="form-label text-secondary fw-semibold mb-1"
            style="font-size:12px;"
        >
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            class="form-control bg-dark-blue-subtle border rounded-2"
            placeholder="Enter Email"
            autocomplete="email"
            value="{{ old('email') }}"
            required
        >

    </div>

    <div class="mb-2">

        <label
            for="password"
            class="form-label text-secondary fw-semibold mb-1"
            style="font-size:12px;"
        >
            Password
        </label>

        <input
            type="password"
            id="password"
            name="password"
            class="form-control bg-dark-blue-subtle border rounded-2"
            placeholder="Enter Password"
            autocomplete="current-password"
            required
        >

    </div>

    <div class="d-flex justify-content-end mb-4">

        <a
            href="#"
            class="text-dark-blue text-decoration-none fw-semibold"
            style="font-size:12px;"
            data-bs-toggle="modal"
            data-bs-target="#forgotPasswordModal"
        >
            Forgot Password?
        </a>

    </div>

    <div class="d-grid mb-4">

        <button
            type="submit"
            class="btn btn-dark-blue fw-semibold rounded-2"
        >
            Login to continue
        </button>

    </div>

    <div class="d-flex align-items-center gap-3 mb-4">

        <hr class="flex-grow-1 m-0">

        <span class="text-secondary" style="font-size:12px;">
            Or
        </span>

        <hr class="flex-grow-1 m-0">

    </div>

    <div class="d-grid mb-4">

        <a
            href="{{ $googleRoute }}"
            class="btn btn-outline-dark-blue fw-semibold rounded-2"
        >
            <span class="fw-bold text-danger me-2">G</span>
            Sign in with Google
        </a>

    </div>

    <div class="text-center">

        <span
            class="text-secondary"
            style="font-size:12px;"
        >
            Don't have an account yet?
        </span>

        <a
            href="#"
            id="showSignup"
            class="text-dark-blue text-decoration-none fw-semibold ms-1"
            style="font-size:12px;"
        >
            Create account
        </a>

    </div>

</form>
