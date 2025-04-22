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
        <input type="email" name="email" class="form-control" placeholder="Enter your email">
        @error('email') <small>{{ $message }}</small>@enderror
      </div>
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Password</label>
        <input type="password" name="password" class="form-control"
          placeholder="password (min 6 characters)" required minlength="6">
        @error('password') <small>{{ $message }}</small>@enderror
      </div>
      <div class="mb-3 text-end">
        <label class="form-label fst-italic">
          <a href="{{ route('forgetPassword.sign') }}">
            Forget Password ?
          </a>

        </label>
      </div>
      <div class="d-flex mt-4 justify-conten-between">
        <a href="{{ route('Sign') }}" class="btn btn-primary" style="color: white;text-decoration: none;">Sign in</a>
        <input type="submit" class="btn btn-primary login" value="Login">
      </div>
    </form>
  </div>

</body>

</html>