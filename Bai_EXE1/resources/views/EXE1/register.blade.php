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
    <title>Register</title>
  </head>
  <body>
    <!-- Hearder -->
    <header class="border p-2 mt-5 text-center">
      <span><a href="{{route('login')}}">Đăng nhập</a></span> |
      <span style="font-weight: bold">Đăng ký</span>
    </header>

    <form action="{{ route('user.postUser') }}" method="POST">
      @csrf
    <!-- Login -->
    <div class="container">
      <table
        class="table m-auto"
        style="table-layout: auto; width: auto; border: 1px solid #ccc"
      >
        <thead>
          <th colspan="2" class="text-center">Màn hình đăng ký</th>
        </thead>
        <tbody>
          <tr>
            <td>Username</td>
            <td>
              <input type="name" id="name" name="name" placeholder="Nhập tên" />
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              <input type="email" id="email" name="email" placeholder="Nhập email" />
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input type="password" id="password" name="password" placeholder="Nhập password"  />
            </td>
          </tr>
            <td>Nhap Lai Password</td>
            <td>
              <input type="password" id="password" name="password" placeholder="Nhập Lại password"  />
            </td>
          </tr>
          <tr>
          <tr class="pt-4">
            <td></td>
            <td>
              <span><a href="{{route('login')}}">Đã có tài khoản</a></span>
              <button type="submit" class="btn btn-primary">Đăng ký</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    </form>
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
