<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renting - Login</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >
    <style>
        :root {
            --dark-blue: #0b2a4a;
            --dark-blue-hover: #081f38;
            --dark-blue-subtle: #e9f0f7;
        }

        .text-dark-blue {
            color: var(--dark-blue) !important;
        }

        .bg-dark-blue {
            background-color: var(--dark-blue) !important;
        }

        .border-dark-blue {
            border-color: var(--dark-blue) !important;
        }

        .bg-dark-blue-subtle {
            background-color: var(--dark-blue-subtle) !important;
        }

        .btn-dark-blue {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
            color: #fff;
        }

        .btn-dark-blue:hover,
        .btn-dark-blue:focus {
            background-color: var(--dark-blue-hover);
            border-color: var(--dark-blue-hover);
            color: #fff;
        }

        .btn-outline-dark-blue {
            color: var(--dark-blue);
            border-color: var(--dark-blue);
        }

        .btn-outline-dark-blue:hover,
        .btn-outline-dark-blue:focus {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
            color: #fff;
        }

        .form-control:focus {
            border-color: var(--dark-blue);
            box-shadow: 0 0 0 0.2rem rgba(11, 42, 74, 0.12);
        }

        .modal-icon {
            width: 62px;
            height: 62px;
        }
    </style>
</head>

<body class="bg-body-tertiary" style="font-family: 'Inter', sans-serif;">

    <main class="min-vh-100 d-flex align-items-center justify-content-center py-4">
        <div class="container-fluid px-3 px-md-4">
            <div class="bg-white rounded-4 shadow-sm overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="px-5 px-xl-5">
                            <div class="d-flex align-items-center mb-5">
                                <div
                                    class="bg-dark-blue rounded-3 d-flex align-items-center justify-content-center me-3 p-3"
                                >
                                    <span class="text-white fs-3 fw-bold lh-1">
                                        R
                                    </span>
                                </div>

                                <span class="fs-2 fw-bold text-dark">
                                    Renting
                                </span>

                            </div>

                            <div class="text-center py-5 px-4">

                                <h2 class="display-6 fw-semibold text-dark-blue lh-sm mb-4">

                                    Simplified Renting,<br>

                                    <span class="text-dark">
                                        Empowered Living
                                    </span>

                                </h2>

                                <p class="fs-5 text-secondary mb-2">
                                    Welcome to the Future of
                                    Rental Management
                                </p>

                                <p class="fs-6 text-secondary mb-0">
                                    "Your Rental Journey Begins Here"
                                </p>

                                <div class="mt-5 pt-3">

                                    <div class="d-flex justify-content-center flex-wrap gap-3">

                                        <span class="text-dark fw-medium">
                                            नमस्ते
                                        </span>

                                        <span class="text-secondary">
                                            Hello
                                        </span>

                                        <span class="text-dark fw-medium">
                                            सत्यमेव जयते
                                        </span>

                                        <span class="text-dark fw-medium">
                                            السلام علیکم
                                        </span>

                                        <span class="text-dark fw-medium">
                                            नमस्कार
                                        </span>

                                        <span class="text-dark fw-medium">
                                            કેમ છો
                                        </span>

                                    </div>

                                    <div class="d-flex justify-content-center flex-wrap gap-3 mt-2">

                                        <small class="text-secondary">
                                            Hindi
                                        </small>

                                        <small class="text-secondary">
                                            English
                                        </small>

                                        <small class="text-secondary">
                                            Sanskrit
                                        </small>

                                        <small class="text-secondary">
                                            Urdu
                                        </small>

                                        <small class="text-secondary">
                                            Marathi
                                        </small>

                                        <small class="text-secondary">
                                            Gujarati
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="p-3 p-md-4 p-xl-5">

                            <div class="border border-2 border-dark-blue rounded-4 bg-light">

                                <div class="p-4 p-md-5">

                                    <div id="loginSection">

                                        <div class="mb-4">

                                            <div
                                                class="d-flex align-items-center gap-2 text-dark-blue fw-bold text-uppercase mb-2"
                                                style="font-size: 10px; letter-spacing: 1.5px;"
                                            >
                                                <span>━</span>
                                                Secure Client Access
                                            </div>

                                            <h1 class="fs-2 fw-bold text-dark mb-2">
                                                Welcome Back
                                            </h1>

                                            <p
                                                class="text-secondary mb-0"
                                                style="font-size: 13px;"
                                            >
                                                Enter your email and password to
                                                access your account
                                            </p>

                                        </div>

                                        <form action="#" method="POST">

                                            <div class="mb-3">

                                                <label
                                                    for="email"
                                                    class="form-label text-secondary fw-semibold mb-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Email
                                                </label>

                                                <input
                                                    type="email"
                                                    id="email"
                                                    name="email"
                                                    class="form-control bg-dark-blue-subtle border rounded-2 py-2"
                                                    placeholder="Enter Email"
                                                    autocomplete="email"
                                                    required
                                                >

                                            </div>

                                            <div class="mb-2">

                                                <label
                                                    for="password"
                                                    class="form-label text-secondary fw-semibold mb-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Password
                                                </label>

                                                <input
                                                    type="password"
                                                    id="password"
                                                    name="password"
                                                    class="form-control bg-dark-blue-subtle border rounded-2 py-2"
                                                    placeholder="Enter Password"
                                                    autocomplete="current-password"
                                                    required
                                                >

                                            </div>

                                            <div class="d-flex justify-content-end mb-4">

                                                <a
                                                    href="#"
                                                    class="text-dark-blue text-decoration-none fw-semibold"
                                                    style="font-size: 12px;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#forgotPasswordModal"
                                                >
                                                    Forgot Password?
                                                </a>

                                            </div>

                                            <div class="d-grid mb-4">

                                                <button
                                                    type="submit"
                                                    class="btn btn-dark-blue fw-semibold py-2 rounded-2"
                                                >
                                                    Login to continue
                                                </button>

                                            </div>

                                            <div class="d-flex align-items-center gap-3 mb-4">

                                                <hr class="flex-grow-1 m-0">

                                                <span
                                                    class="text-secondary"
                                                    style="font-size: 12px;"
                                                >
                                                    Or
                                                </span>

                                                <hr class="flex-grow-1 m-0">

                                            </div>

                                            <div class="d-grid mb-4">

                                                <button
                                                    type="button"
                                                    class="btn btn-outline-dark-blue fw-semibold py-2 rounded-2"
                                                >

                                                    <span class="fw-bold text-danger me-2">
                                                        G
                                                    </span>

                                                    Sign in with Google

                                                </button>

                                            </div>

                                            <div class="text-center">

                                                <span
                                                    class="text-secondary"
                                                    style="font-size: 12px;"
                                                >
                                                    Don't have an account yet?
                                                </span>

                                                <a
                                                    href="#"
                                                    id="showSignup"
                                                    class="text-dark-blue text-decoration-none fw-semibold ms-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Create account
                                                </a>

                                            </div>

                                        </form>

                                    </div>

                                    <div id="signupSection" class="d-none">

                                        <div class="mb-4">

                                            <div
                                                class="d-flex align-items-center gap-2 text-dark-blue fw-bold text-uppercase mb-2"
                                                style="font-size: 10px; letter-spacing: 1.5px;"
                                            >
                                                <span>━</span>
                                                Create Account
                                            </div>

                                            <h1 class="fs-2 fw-bold text-dark mb-2">
                                                Create Account
                                            </h1>

                                            <p
                                                class="text-secondary mb-0"
                                                style="font-size: 13px;"
                                            >
                                                Enter your details to create your account
                                            </p>

                                        </div>

                                        <form action="#" method="POST">

                                            <div class="mb-3">

                                                <label
                                                    for="company_name"
                                                    class="form-label text-secondary fw-semibold mb-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Company Name
                                                </label>

                                                <input
                                                    type="text"
                                                    id="company_name"
                                                    name="company_name"
                                                    class="form-control bg-dark-blue-subtle border rounded-2 py-2"
                                                    placeholder="Enter Company Name"
                                                    required
                                                >

                                            </div>

                                            <div class="mb-3">

                                                <label
                                                    for="signup_name"
                                                    class="form-label text-secondary fw-semibold mb-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Name
                                                </label>

                                                <input
                                                    type="text"
                                                    id="signup_name"
                                                    name="name"
                                                    class="form-control bg-dark-blue-subtle border rounded-2 py-2"
                                                    placeholder="Enter Name"
                                                    required
                                                >

                                            </div>

                                            <div class="mb-3">

                                                <label
                                                    for="signup_email"
                                                    class="form-label text-secondary fw-semibold mb-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Email
                                                </label>

                                                <input
                                                    type="email"
                                                    id="signup_email"
                                                    name="email"
                                                    class="form-control bg-dark-blue-subtle border rounded-2 py-2"
                                                    placeholder="Enter Email"
                                                    required
                                                >

                                            </div>

                                            <div class="mb-4">

                                                <label
                                                    for="phone"
                                                    class="form-label text-secondary fw-semibold mb-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Phone Number
                                                </label>

                                                <input
                                                    type="tel"
                                                    id="phone"
                                                    name="phone"
                                                    class="form-control bg-dark-blue-subtle border rounded-2 py-2"
                                                    placeholder="Enter Phone Number"
                                                    required
                                                >

                                            </div>

                                            <div class="d-grid mb-4">

                                                <button
                                                    type="submit"
                                                    class="btn btn-dark-blue fw-semibold py-2 rounded-2"
                                                >
                                                    Create Account
                                                </button>

                                            </div>

                                            <div class="text-center">

                                                <span
                                                    class="text-secondary"
                                                    style="font-size: 12px;"
                                                >
                                                    Already have an account?
                                                </span>

                                                <a
                                                    href="#"
                                                    id="showLogin"
                                                    class="text-dark-blue text-decoration-none fw-semibold ms-1"
                                                    style="font-size: 12px;"
                                                >
                                                    Login
                                                </a>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="modal-header border-0 p-4 pb-2">
                    <div class="w-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div
                                class="bg-dark-blue-subtle text-dark-blue rounded-4 d-flex align-items-center justify-content-center mb-3 modal-icon"
                            >
                                <span class="fs-3">
                                    🔑
                                </span>
                            </div>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div
                            class="d-flex align-items-center gap-2 text-dark-blue fw-bold text-uppercase mb-2"
                            style="font-size: 10px; letter-spacing: 1.5px;"
                        >
                            <span>━</span>
                            Secure Account Recovery
                        </div>
                        <h5
                            class="modal-title fs-3 fw-bold text-dark"
                            id="forgotPasswordModalLabel"
                        >
                            Reset your password
                        </h5>
                    </div>
                </div>
                <div class="modal-body px-4 pb-4">
                    <p
                        class="text-secondary mb-4"
                        style="font-size: 13px; line-height: 1.7;"
                    >
                        Enter the email linked to your workspace. We'll send a secure,
                        time-limited reset link if the account exists.
                    </p>
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label
                                for="forgot_email"
                                class="form-label text-secondary fw-semibold mb-1"
                                style="font-size: 12px;"
                            >
                                Work email address
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark-blue-subtle border-end-0 text-secondary">
                                    ✉
                                </span>
                                <input
                                    type="email"
                                    id="forgot_email"
                                    name="email"
                                    class="form-control bg-dark-blue-subtle border-start-0 py-2"
                                    placeholder="name@company.com"
                                    required
                                >
                            </div>
                        </div>
                        <div class="d-grid mb-3">
                            <button
                                type="submit"
                                class="btn btn-dark-blue fw-semibold py-2 rounded-2"
                            >
                                Send Reset Link
                            </button>
                        </div>
                        <div class="text-center mb-4">
                            <span
                                class="text-secondary"
                                style="font-size: 11px;"
                            >
                                🛡 &nbsp; Your account details remain private and protected
                            </span>
                        </div>
                        <div class="text-center">
                            <button
                                type="button"
                                class="btn btn-link text-secondary text-decoration-none fw-semibold p-0"
                                data-bs-dismiss="modal"
                                style="font-size: 12px;"
                            >
                                ← &nbsp; Back to sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () 
        {
            $('#showSignup').on('click', function (e) 
            {
                e.preventDefault();
                $('#loginSection').addClass('d-none');
                $('#signupSection').removeClass('d-none');

            });
            $('#showLogin').on('click', function (e) 
            {
                e.preventDefault();
                $('#signupSection').addClass('d-none');
                $('#loginSection').removeClass('d-none');
            });
        });
    </script>
    
</body>
</html>
