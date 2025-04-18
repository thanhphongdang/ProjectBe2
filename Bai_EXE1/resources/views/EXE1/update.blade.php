<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="public/css/style.css" />
    <title>Update</title>
  </head>
  <body>
    <!-- Hearder -->
    <header class="border p-2 mt-5 text-center">
      <span><a href="{{route('user.list')}}">Home</a></span>
    </header>

    <form action="{{ route('user.postUpdateUser') }}" method="POST">
      @csrf
      <input name="id" value="{{ $user->id }}" hidden />
    <div class="container">
      <table
        class="table m-auto"
        style="table-layout: auto; width: auto; border: 1px solid #ccc"
      >
        <thead>
          <th colspan="2" class="text-center">Màn hình Edit</th>
        </thead>
        <tbody>
          <tr>
            <td>Username</td>
            <td>
              <input type="name" name="name" id="name" value="{{$user->name}}" />
            </td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td>
              <input type="password" name="password" id="password" placeholder="Entry password"/>
            </td>
          </tr>
          <tr>
            <td>Nhập lại mật khẩu</td>
            <td>
              <input type="password" name="password" id="password" placeholder="Re_entry password"/>
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              <input type="email" name="email" id="email"  value="{{$user->email}}" />
            </td>
          </tr>
          <tr class="pt-4">
            <td></td>
            <td>
              <button type="submit" class="btn btn-primary">Edit</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    </form>
    <!-- Login -->
    

    <!-- Footer -->
    <footer class="border pt-2 text-center mb-1">
      <p>Lập trình web @01/2025</p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"
    ></script>
    <script src="public/js/javascript.js"></script>
  </body>
</html>
