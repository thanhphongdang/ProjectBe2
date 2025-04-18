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
    <title>Login</title>
  </head>
  <body>
    <!-- Hearder -->
    <header class="border p-2 mt-5 text-center">
      <span style="font-weight: bold">Đăng nhập</span> |
      <a href="{{ route('user.createUser') }}">Đăng Ký</a>
    </header>

    <!-- Login -->
    <form action="{{ route('user.authUser') }}" method="POST">
      @csrf
    <div class="container">
      <table
        class="table m-auto"
        style="table-layout: auto; width: auto; border: 1px solid #ccc"
      >
        <thead>
          <th colspan="2" class="text-center">Màn hình đăng nhập</th>
        </thead>
        <tbody>
          <tr>
            <td>Email</td>
            <td>
              <input type="email" name="email" id="email" class="form-control" placeholder="email" required autofocus/>
            </td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td>
              <input type="password" name="password" id="password" class="form-control" placeholder="password" required autofocus />
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="checkbox" /> Ghi nhớ mật khẩu</td>
          </tr>
          <tr class="pt-4">
            <td></td>
            <td>
              <span><a href="">Quên mật khẩu</a></span>
              <button type="submit" class="btn btn-primary"><a href="{{ route('user.list') }}"></a>Đăng nhập</button>
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
