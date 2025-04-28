<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Resep Masakan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #ff6b6b;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
        }
        .container {
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
        }
        .btn-primary:hover {
            background-color: #e64c4c;
            border-color: #e64c4c;
        }
        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
        }
        .btn-success {
            background-color: #5cb85c;
            border-color: #5cb85c;
        }
        .btn-warning {
            background-color: #f0ad4e;
            border-color: #f0ad4e;
        }
        .pagination {
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('resep.index') }}">Sistem Manajemen Resep Masakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('resep.index') }}">Daftar Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('resep.create') }}">Tambah Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('resep.trashed') }}">Resep Terhapus</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
