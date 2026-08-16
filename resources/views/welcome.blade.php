<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renting - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --dark-blue: #0b2a4a;
            --dark-blue-hover: #081f38;
            --dark-blue-subtle: #e9f0f7;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
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
            background-color: #fff;
        }

        .btn-outline-dark-blue:hover {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
            color: #fff;
        }

        .form-control {
            min-height: 44px;
        }

        .form-control:focus {
            border-color: var(--dark-blue);
            box-shadow: 0 0 0 .2rem rgba(11, 42, 74, .12);
        }

        .login-wrapper {
            min-height: 100vh;
        }

        .main-card {
            max-width: 1400px;
            min-height: 720px;
        }

        .brand-icon {
            width: 58px;
            height: 58px;
        }

        .login-panel {
            max-width: 520px;
            margin: auto;
        }

        .login-box {
            border: 2px solid var(--dark-blue);
        }

        .mobile-brand {
            display: none;
        }

        .modal-icon {
            width: 62px;
            height: 62px;
        }

        @media (max-width: 991.98px) {
            .login-wrapper {
                padding: 0 !important;
            }

            .main-card {
                min-height: 100vh;
                border-radius: 0 !important;
                box-shadow: none !important;
            }

            .mobile-brand {
                display: flex;
            }

            .login-panel {
                max-width: 560px;
            }
        }

        @media (max-width: 575.98px) {
            body {
                background: #fff !important;
            }

            .mobile-brand {
                padding: 24px 20px 8px;
            }

            .brand-icon {
                width: 46px;
                height: 46px;
            }

            .mobile-brand-name {
                font-size: 24px;
            }

            .login-content {
                padding: 16px !important;
            }

            .login-box {
                border-width: 1px;
                border-radius: 20px !important;
                background: #f8fafc !important;
            }

            .login-box-inner {
                padding: 24px 20px !important;
            }

            .login-title {
                font-size: 28px !important;
            }

            .login-description {
                font-size: 12px !important;
                line-height: 1.6;
            }

            .form-control {
                min-height: 48px;
                font-size: 14px;
            }

            .btn {
                min-height: 48px;
                font-size: 14px;
            }

            .modal-dialog {
                margin: 12px;
            }
            .modal-content {
                border-radius: 20px !important;
            }
        }
    </style>
</head>
<body class="bg-body-tertiary">
    <main class="login-wrapper d-flex align-items-center justify-content-center py-lg-4">
        <div class="container-fluid px-0 px-lg-4">
            <div class="main-card bg-white rounded-4 shadow-sm overflow-hidden mx-auto">
                <div class="mobile-brand align-items-center">
                    <div class="brand-icon bg-dark-blue rounded-3 d-flex align-items-center justify-content-center me-3">
                        <span class="text-white fs-3 fw-bold">R</span>
                    </div>
                    <span class="mobile-brand-name fw-bold text-dark">
                        Renting
                    </span>
                </div>
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="px-5">
                            <div class="d-flex align-items-center mb-5">
                                <div class="brand-icon bg-dark-blue rounded-3 d-flex align-items-center justify-content-center me-3">
                                    <span class="text-white fs-3 fw-bold">R</span>
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
                                    Welcome to the Future of Rental Management
                                </p>
                                <p class="fs-6 text-secondary mb-0">
                                    "Your Rental Journey Begins Here"
                                </p>
                                <div class="mt-5 pt-3">
                                    <div class="d-flex justify-content-center flex-wrap gap-3">
                                        <span class="text-dark fw-medium">नमस्ते</span>
                                        <span class="text-secondary">Hello</span>
                                        <span class="text-dark fw-medium">सत्यमेव जयते</span>
                                        <span class="text-dark fw-medium">السلام علیکم</span>
                                        <span class="text-dark fw-medium">नमस्कार</span>
                                        <span class="text-dark fw-medium">કેમ છો</span>
                                    </div>
                                    <div class="d-flex justify-content-center flex-wrap gap-3 mt-2">
                                        <small class="text-secondary">Hindi</small>
                                        <small class="text-secondary">English</small>
                                        <small class="text-secondary">Sanskrit</small>
                                        <small class="text-secondary">Urdu</small>
                                        <small class="text-secondary">Marathi</small>
                                        <small class="text-secondary">Gujarati</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content p-3 p-md-4 p-xl-5">
                            <div class="login-panel">
                                <div class="login-box rounded-4 bg-light">
                                    <div class="login-box-inner p-4 p-md-5">
                                        <div id="loginSection">
                                            <x-auth.login-form />
                                        </div>
                                        <div id="signupSection" class="d-none">
                                            <x-auth.signup-form />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<x-auth.forgot-password />
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