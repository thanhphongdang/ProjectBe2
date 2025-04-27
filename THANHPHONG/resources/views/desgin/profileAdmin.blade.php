<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <title>Thông tin của Admin</title>
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

        .profile-pic {
            width: 150px;
            height: 150px;
            background-color: white;
            /* border-radius: 50%; */
            margin-bottom: 20px;
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

        .form-group img {
            max-width: 100px;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        th {
            padding: 10px 250px 10px 0px;
            border-bottom: 1px solid #ccc;
        }

        img {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
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
    <div class="main-content">
        <div class="header">Profile Information</div>
        <table>

            <tr>
                <td>Name: </td>
                <th>{{ $admin->Name }}</th>
            </tr>
            <tr>
                <td>Email:</td>
                <th>{{ $admin->Email }}</th>
            </tr>
            <tr>
                <td>Phone:</td>
                <th>{{ $admin->Phone }}</th>
            </tr>
            <tr>
                <td>Password:</td>
                <th>{{ $admin->Password }}</th>
            </tr>
        </table>
        <br>

        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <h5>Avatar</h5>
                <img src="{{ asset('img/' . $admin->image) }}" width="100px" height="100px" class="profile-pic">

                <h5>Logo Website</h5>
                <img src="{{ asset('img/' . $admin->logo) }}" width="150px" height="150px" class="rounded-circle border">
            </div>
        
            <div class="col-md-8">
                <h5>Citizen Identification Card</h5>
        
                <div class="mb-3">
                    <label><strong>Front</strong></label><br>
                    <img src="{{ asset('img/' . $admin->image_front) }}" width="300px" height="200px" class="border">
                </div>
        
                <div>
                    <label><strong>Backsite</strong></label><br>
                    <img src="{{ asset('img/' . $admin->image_backsite) }}" width="300px" height="200px" class="border">
                </div>
            </div>
        </div>
    </div>
</body>

</html>