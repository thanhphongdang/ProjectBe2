<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('image/hinh1.jpg');
      /* thay link ảnh nền */
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 2rem;
      border-radius: 1rem;
      color: white;
      backdrop-filter: blur(8px);
      width: 100%;
      max-width: 500px;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .btn-black {
      background-color: black;
      color: white;
    }

    .btn-black:hover {
      background-color: #333;
    }
  </style>
</head>

<body>

  <div class="login-card text-center">
    <h3 class="mb-4 fst-italic">LOGIN</h3>
    <form action="{{ route('user.authUser') }}" method="POST">
      @csrf
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Email</label>
        <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          placeholder="Enter your email">
        @error('email')
      <small class="text-danger">{{ $message }}</small>
    @enderror
      </div>
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Password</label>
        <input type="password" name="password" class="form-control" placeholder="password (min 6 characters)"
          pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required minlength="6">
        @error('password')
      <small class="text-danger">{{ $message }}</small>
    @enderror
      </div>
      <div class="mb-3 text-end">
        <label class="form-label fst-italic"> <a href="{{ route('OTP.sign') }} " style="text-decoration:none;">
            Forget Password ?
          </a></label>
      </div>
      <div class="d-flex mt-4 justify-conten-between">
        <a href="{{ route('Sign') }}" class="btn btn-primary" style="color: white;text-decoration: none;">Sign in</a>
        <input type="submit" class="btn btn-primary" value="Login">
      </div>
    </form>
    <div class="d-flex justify-content-center mt-3 gap-2">
      <a href="{{ route('login.facebook') }}" class="btn btn-primary" style="background-color: #3b5998;">
        <i class="fab fa-facebook-f me-2"></i> Login with Facebook
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('capnhatthanhcong'))
    <script>
    Swal.fire({
      title: 'Thành công!',
      text: "{{ session('capnhatthanhcong') }}",
      icon: 'success',
      confirmButtonText: 'OK'
    });
    </script>
  @endif
   <!-- #region -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  @if (session('error'))
        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3">
            <div class="toast align-items-center text-bg-danger border-0 show" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            toastElList.forEach(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, { delay: 300 });
                toast.show();
            });
        });
    </script>

</body>
<!-- #region -->
<script>
  document.querySelector('input[name="password"]').addEventListener('input', function () {
    this.value = this.value.replace(/\s/g, '');
  });
</script>

</html>