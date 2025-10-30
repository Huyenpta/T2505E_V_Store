<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'V_Store')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-o8LhQm+K3I1mE8bU0/YZP2DwQGqg0M0m5wHVzjR7oLQ5rTshhhX8w6V53QzA8JkIUB3b9VfYckHnVDmZx8aVxQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <style>
        body {
            background-color: #f8fafc;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
        nav.navbar {
            background-color: #e75c3c !important;
        }
        .navbar-brand {
            font-weight: 600;
            color: #fff !important;
            letter-spacing: 0.5px;
        }
        .navbar-brand:hover {
            color: #ffe6d5 !important;
        }
        footer {
            margin-top: 40px;
            padding: 20px 0;
            color: #6c757d;
            border-top: 1px solid #eaeaea;
            text-align: center;
            font-size: 14px;
        }
        .alert {
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #e75c3c;
            border: none;
        }
        .btn-primary:hover {
            background-color: #d44d2c;
        }

        /* ===== BẢNG DỮ LIỆU & ICON HÀNH ĐỘNG ===== */
        table thead {
            background-color: #e75c3c;
            color: #fff;
        }
        table tbody tr:hover {
            background-color: #fff5f2;
            transition: 0.2s;
        }
        table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* ===== FORM ===== */
        .form-control:focus {
            border-color: #e75c3c;
            box-shadow: 0 0 0 0.15rem rgba(231, 92, 60, 0.25);
        }
        .btn-outline-secondary {
            border-color: #e75c3c;
            color: #e75c3c;
        }
        .btn-outline-secondary:hover {
            background-color: #e75c3c;
            color: #fff;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('store.index') }}"><span>V_Store</span> &nbsp;&nbsp; <span>Items</span></a>
        </div>
    </nav>

    {{-- Main container --}}
    <div class="container mt-4">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Nội dung riêng từng trang --}}
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        <small>&copy; {{ date('Y') }} - V_Store Management System</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
