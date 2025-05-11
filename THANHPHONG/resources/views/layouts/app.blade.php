<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>Quản lý mã giảm giá</title>
    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-color: #f9f9f9;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 180px;
            height: 100vh;
            background-color: #2c2c2c;
            color: white;
            padding-top: 20px;
            text-align: center;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: normal;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .sidebar ul li:hover,
        .sidebar ul li.active {
            background-color: #8d4c4c;
        }

        /* Main content */
        .main-content {
            margin-left: 180px;
            padding: 20px 40px;
        }

        .header {
            background-color: #2c2c2c;
            color: white;
            padding: 10px;
            font-size: 22px;
            text-align: center;
            margin-bottom: 30px;
            font-family: Georgia, serif;
        }

        .form-group {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin</h2>
        <ul class="navbar-nav">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Customer Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Vehicke Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Product Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('PostQLMaGiamGia') }}">Manage Vouchers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Car Warehouse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Manage Sold Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Customer Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Account Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="">Logout</a>
                </li>
            @endguest
        </ul>
    </div>
    @yield('content')
</body>

</html>