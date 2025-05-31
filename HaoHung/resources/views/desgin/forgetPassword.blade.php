<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-image: url('image/ferrari-laferrari.jpg');
        }

        .form {
            width: 500px;
            top: 150px;
            left: 35%;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            /* Nền mờ */
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
            backdrop-filter: blur(10px);
            /* Glass effect */
            -webkit-backdrop-filter: blur(10px);
            color: white;
            position: relative;

        }

        .header {
            top: 0;
            background: black;
            height: 50px;
            text-align: center;
            color: white;
            font-size: 20px;
            border-radius: 20px 20px 0 0;
            padding: 5px;

        }

        button {
            transition: .3s;
            width: fit-content;
            height: fit-content;
            background: rgb(15, 201, 230);
            padding: 10px;
            border-radius: 10px;
            color: white;
        }

        button:hover {
            background: green;
            border: 2px solid greenyellow;
        }

        /* img {
            inset: 0;
            position: fixed;
            z-index: -1;
        } */
    </style>
    <title>Document</title>
</head>

<body>

    <form action="{{ route('user.postUpdatePassword') }}" class="form" method="POST">
        @csrf
        <div class="mt-3 header">Forget Password</div>

        <div class="mt-3">
            <label for="otp" class="py-3" style="color: black;">OTP</label>
            <input type="text" class="form-control" name="code" id="code" required>
        </div>
        <div class="mt-3">
            <label for="password" class="py-3" style="color: black;">New Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="mt-3">
            <label for="password_confirmation" class="py-3" style="color: black;">Confirm New Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
        </div>
        <div class="mt-3">
            <button class="" type="submit" value="forgetPassword">
                Complete
            </button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('thanhcong'))
    <script>
        Swal.fire({
            title: 'Thành công!',
            text: "{{ session('thanhcong') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif


   
</body>

</html>