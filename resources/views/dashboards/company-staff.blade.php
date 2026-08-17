<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
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
        <p class="text-uppercase text-secondary fw-semibold mb-1" style="font-size: 12px;">Operations</p>
        <h1 class="h3 mb-1">Staff Dashboard</h1>
        <p class="text-secondary">Welcome, {{ $user->name }}. Your assigned rental operations are ready.</p>

        <div class="list-group shadow-sm">
            <div class="list-group-item">Review assigned properties</div>
            <div class="list-group-item">Track maintenance requests</div>
            <div class="list-group-item">Update tenant service items</div>
        </div>
    </main>
</body>
</html>
