<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
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
    <h3 class="mb-4 fst-italic">SIGN IN</h3>
    <form action="{{ route('post.Sign') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Full Name</label>
        <input type="text" name="name" class="form-control" maxlength="30" placeholder="Enter your full name" required>
        @error('name')
      <small class="text-danger">Bat Buoc Phai nhap</small>
    @enderror
      </div>
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Email</label>
        <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" minlength
          placeholder="Enter your email" required>
      </div>
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Phone</label>
        <input type="number" name="phone" class="form-control" pattern="[0,9]+" maxlength="10"
          placeholder="Enter your phone number" required>
      </div>
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Address</label>
        <input type="text" name="address" class="form-control" pattern="[a-zA-Z0-9\s.,'-]+"
          placeholder="Enter your address" required>
      </div>
      <!-- <div class="col-md-6">
        <label for="inputEmail5" class="form-label">Image</label>
        <input type="file" name="image" class="form-control slug-title" placeholder="Image" id="image">
      </div> -->
      <div class="mb-3 text-start">
        <label class="form-label fst-italic">Password</label>
        <input type="password" name="password" class="form-control"
          pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"
          placeholder="Create a password (min 6 characters)" required minlength="6">
      </div>
      <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('Login') }}" class="btn btn-black" style="color: white;text-decoration: none;">Login</a>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </div>
    </form>
  </div>

  <script>
    document.querySelector('input[name="password"]').addEventListener('input', function () {
      this.value = this.value.replace(/\s/g, '');
    });
  </script>

</body>

</html>