<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" href="public/css/style.css" />

  <style>
    table>tr,
    th {
      border-bottom: 1px solid #ccc !important;
    }
  </style>
  <title>List</title>
</head>

<body>
  <!-- Hearder -->
  <header class="border p-2 mt-5 text-center">
    <span style="font-weight: bold">Home</span> | <span style="font-weight: bold"><a href="{{route('login')}}">Đăng
        xuất</a></span>
  </header>

  <!-- Login -->
  <div class="container mt-5">
    <h3 class="text-center">Danh sách User</h3>
    <table class="table table-bordered m-auto" style="table-layout: auto; width: auto">
      <thead>
        <tr class="text-center">
          <th>#</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td> @foreach($user->roles as $role)
      <a href="{{ route('user.role', ['id' => $role->id]) }}">
        {{ $role->name . '-' }}
      </a>
    @endforeach
        </td>
        <td>
        <a href="{{route('user.updateUser', ['id' => $user->id])}}">Edit</a> | <a
          href="{{route('user.readUser', ['id' => $user->id])}}">View</a> | <a
          href="{{route('user.deleteUser', ['id' => $user->id])}}">Delete</a>
        </td>
      </tr>
    @endforeach
      </tbody>
    </table>
    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
  </div>

  <!-- Footer -->
  <footer class="border pt-2 text-center mb-1">
    <p>Lập trình web @01/2025</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
  <script src="public/js/javascript.js"></script>
</body>

</html>