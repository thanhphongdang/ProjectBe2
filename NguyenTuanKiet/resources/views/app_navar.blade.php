<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Customer Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('assets/css/users.css') }}">
  <link rel="stylesheet" href="{{ assert('assets/css/style.css')}}"/>

</head>
<body>
  <div class="sidebar">
    <!-- Sidebar -->
      <h2>Admin</h2>
      <ul>
        <li>Home</li>
        <li class="active">Customer Management</li>
        <li>Vehicle Management</li>
        <li>Product Management</li>
        <li>Manage Vouchers</li>
        <li>Car Warehouse</li>
        <li>Manage Sold Cars</li>
        <li>Customer Reviews</li>
        <li>Account Page</li>
        <li>Profile</li>
        <li><a href="{{route('Login')}}">Logout</a></li>
      </ul>
  </div>
    @yield('content')

  <script src="{{ assert('assets/js/users.js')}}"></script>
</body>
</html>
