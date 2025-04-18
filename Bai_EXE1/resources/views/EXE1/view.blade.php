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

    <style>
      /* table > tr,
      th {
        border-bottom: 1px solid #ccc !important;
      } */

      input {
        border: none;
        font-weight: bold;
      }
    </style>
    <title>View</title>
  </head>
  <body>
    <!-- Hearder -->
    <header class="border p-2 mt-5 text-center">
      <span><a href="{{route('user.list')}}">Home</a></span> | <span style="font-weight: bold"><a href="{{route('signout')}}">Đăng xuất</a></span>
    </header>

    <!-- Login -->
    <div class="container">
      <table
        class="table m-auto"
        style="table-layout: auto; width: auto; border: 1px solid #ccc"
      >
        <thead>
          <th colspan="2" class="text-center">Màn hình chi tiết</th>
        </thead>
        <tbody>
          <tr>
            <td>Username</td>
            <td>
              <input type="name" value="{{$messi->name}}"/>
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              <input type="email" value="{{$messi->email}}"/>
            </td>
          </tr>
          <tr class="pt-4">
            <td></td>
            <td class="text-right">
              <button type="submit" class="btn btn-danger"><a href="{{ route('user.updateUser',['id'=>$messi->id])}}">Chỉnh sửa</a></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
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
