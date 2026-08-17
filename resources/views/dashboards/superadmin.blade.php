<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superadmin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand bg-white border-bottom">
        <div class="container">
            <span class="navbar-brand fw-bold">Renting Platform</span>
            <form method="POST" action="{{ route('superadmin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
            </form>
        </div>
    </nav>

    <main class="container py-4">
        <div class="mb-4">
            <p class="text-uppercase text-secondary fw-semibold mb-1" style="font-size: 12px;">Global Control</p>
            <h1 class="h3 mb-1">Superadmin Dashboard</h1>
            <p class="text-secondary mb-0">Welcome, {{ $user->name }}. You can manage every tenant from here.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="card rounded-2 border-0 shadow-sm">
                    <div class="card-body">
                        <p class="text-secondary mb-1">Companies</p>
                        <div class="display-6 fw-bold">{{ $companyCount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-2 border-0 shadow-sm">
                    <div class="card-body">
                        <p class="text-secondary mb-1">Active Companies</p>
                        <div class="display-6 fw-bold">{{ $activeCompanyCount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-2 border-0 shadow-sm">
                    <div class="card-body">
                        <p class="text-secondary mb-1">Platform Users</p>
                        <div class="display-6 fw-bold">{{ $userCount }}</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
