<div class="mb-4">

    <div
        class="d-flex align-items-center gap-2 text-dark-blue fw-bold text-uppercase mb-2"
        style="font-size:10px;letter-spacing:1.5px;"
    >
        <span>━</span>
        Create Account
    </div>

    <h1 class="login-title fs-2 fw-bold text-dark mb-2">
        Create Account
    </h1>

    <p
        class="login-description text-secondary mb-0"
        style="font-size:13px;"
    >
        Enter your details to create your account
    </p>

</div>

<form action="#" method="POST">

    @csrf

    <div class="mb-3">

        <label
            for="company_name"
            class="form-label text-secondary fw-semibold mb-1"
            style="font-size:12px;"
        >
            Company Name
        </label>

        <input
            type="text"
            id="company_name"
            name="company_name"
            class="form-control bg-dark-blue-subtle border rounded-2"
            placeholder="Enter Company Name"
            required
        >

    </div>

    <div class="mb-3">

        <label
            for="signup_name"
            class="form-label text-secondary fw-semibold mb-1"
            style="font-size:12px;"
        >
            Name
        </label>

        <input
            type="text"
            id="signup_name"
            name="name"
            class="form-control bg-dark-blue-subtle border rounded-2"
            placeholder="Enter Name"
            required
        >

    </div>

    <div class="mb-3">

        <label
            for="signup_email"
            class="form-label text-secondary fw-semibold mb-1"
            style="font-size:12px;"
        >
            Email
        </label>

        <input
            type="email"
            id="signup_email"
            name="email"
            class="form-control bg-dark-blue-subtle border rounded-2"
            placeholder="Enter Email"
            required
        >

    </div>

    <div class="mb-4">

        <label
            for="phone"
            class="form-label text-secondary fw-semibold mb-1"
            style="font-size:12px;"
        >
            Phone Number
        </label>

        <input
            type="tel"
            id="phone"
            name="phone"
            class="form-control bg-dark-blue-subtle border rounded-2"
            placeholder="Enter Phone Number"
            autocomplete="tel"
            required
        >

    </div>

    <div class="d-grid mb-4">

        <button
            type="submit"
            class="btn btn-dark-blue fw-semibold rounded-2"
        >
            Create Account
        </button>

    </div>

    <div class="text-center">

        <span
            class="text-secondary"
            style="font-size:12px;"
        >
            Already have an account?
        </span>
        <a
            href="#"
            id="showLogin"
            class="text-dark-blue text-decoration-none fw-semibold ms-1"
            style="font-size:12px;"
        >
            Login
        </a>

    </div>

</form>