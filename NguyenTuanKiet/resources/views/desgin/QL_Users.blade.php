<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Customer Management</title>
  <link rel="stylesheet" href="{{ asset('assets/css/users.css') }}">
  <link rel="stylesheet" href="{{ assert('assets/css/style.css')}}"/>

</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
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
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <h1>User Table</h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email and Phone</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="user-table-body">
          @foreach($users as $user):
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}<br>{{$user->email}}</td>
            <td>Inactive</td>
            <td>
               <button class="btn btn-primary "> <a href="{{ route('add_user') }}" class="btn btn-primary ">Add User</a></button>  
              <button onclick="updateUser()"><a href="{{ route('edit', ['id' => $user->id]) }}">Update</a> </button>
              <button class="" onclick="deleteUser(this)">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="pagination">
        <button disabled>BACK</button>
        <span>1</span>
        <button>NEXT</button>
      </div>
    </main>
  </div>

  <script src="{{ assert('assets/js/users.js')}}"></script>
</body>
</html>
