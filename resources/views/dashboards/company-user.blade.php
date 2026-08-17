<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand bg-white border-bottom">
        <div class="container">
            <span class="navbar-brand fw-bold">{{ $company->name }}</span>
            <form method="POST" action="{{ route('tenant.logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
            </form>
        </div>
    </nav>

    <main class="container py-4">
        <p class="text-uppercase text-secondary fw-semibold mb-1" style="font-size: 12px;">My Account</p>
        <h1 class="h3 mb-1">User Dashboard</h1>
        <p class="text-secondary">Welcome, {{ $user->name }}. View your rental account, requests, and updates here.</p>

        <div class="row g-3">
            <div class="col-md-4"><div class="card rounded-2 border-0 shadow-sm"><div class="card-body fw-semibold">My Rental</div></div></div>
            <div class="col-md-4"><div class="card rounded-2 border-0 shadow-sm"><div class="card-body fw-semibold">Payments</div></div></div>
            <div class="col-md-4"><div class="card rounded-2 border-0 shadow-sm"><div class="card-body fw-semibold">Support Requests</div></div></div>
        </div>
    </main>
</body>
</html>
