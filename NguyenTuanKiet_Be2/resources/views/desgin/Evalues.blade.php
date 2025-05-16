<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Car Review</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #fff;
    }

    /* Navbar */
    .navbar {
      background-color: #000;
      padding: 10px 20px;
    }

    .nav-list {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .nav-list li {
      margin: 5px 10px;
    }

    .nav-list a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .nav-list input[type="text"] {
      padding: 5px;
      border-radius: 4px;
      border: none;
    }

    .nav-list button {
      padding: 5px 10px;
      margin-left: 5px;
      border: none;
      background-color: white;
      border-radius: 4px;
      cursor: pointer;
    }



    .header {
      background-color: #f8f8f8;
      padding: 10px 20px;
      border-bottom: 2px solid #ccc;
    }

    .header h2 {
      margin: 0;
      padding: 10px 0;
    }

    .review-container {
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .car-info {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .car-info img {
      width: 200px;
      height: auto;
      border-radius: 5px;
    }

    .car-details h3 {
      margin: 0;
    }

    .stars {
      margin: 20px 0;
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
    }

    .stars span:hover,
    .stars span:hover~span {
      color: gold;
    }

    textarea {
      width: 100%;
      height: 100px;
      padding: 10px;
      font-size: 14px;
      resize: none;
      margin-bottom: 10px;
    }

    .upload-section {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 20px;
    }

    .upload-box {
      width: 70px;
      height: 70px;
      border: 2px dashed #ccc;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #888;
      text-align: center;
      cursor: pointer;
    }

    .submit-btn {
      background-color: #ff4d4d;
      color: white;
      padding: 12px 30px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      float: right;
    }

    .submit-btn:hover {
      background-color: #e60000;
    }

    .rating {
      direction: rtl;
      unicode-bidi: bidi-override;
      font-size: 2rem;
      display: inline-flex;
    }

    .rating input {
      display: none;
    }

    .rating label {
      color: #ddd;
      cursor: pointer;
    }

    .rating input:checked~label,
    .rating label:hover,
    .rating label:hover~label {
      color: #ffc107;
      /* Màu vàng */
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <ul class="nav-list">
      <li><a href="{{ route('indexHome')  }}">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="{{ route('appointment') }}">Make an Appointment</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="#">List Car</a></li>
      <li><a href="#">Customer Support</a></li>
      <li><a href="#">Introduce</a></li>
      <li><input type="text" name="" placeholder="Search..."> <button>🔍</button></li>
    </ul>
  </nav>
  <div class="header">
    <h2>Your review of the product</h2>
  </div>

  <div class="review-container">
    <div class="car-info">
      <img src="https://via.placeholder.com/200" alt="Car Image" />
      <div class="car-details">
        <h3>Name car</h3>
        <p>Car company / Car color</p>
      </div>
    </div>

    <form action="{{ route('createEvalutes') }}" method="POST">
      @csrf
      <div class="stars">
        <div class="rating">
          <input type="radio" id="star5" name="Star" value="5"><label for="star5">★</label>
          <input type="radio" id="star4" name="Star" value="4"><label for="star4">★</label>
          <input type="radio" id="star3" name="Star" value="3"><label for="star3">★</label>
          <input type="radio" id="star2" name="Star" value="2"><label for="star2">★</label>
          <input type="radio" id="star1" name="Star" value="1"><label for="star1">★</label>
        </div>

      </div>
      <div class="mt-3">
          <label for="" class="form-label">ID Product</label>
          <input type="text" name="ID_Product" class="form-control">
        </div>
        <div class="mt-3">
          <label for="" class="form-label">ID Customer</label>
          <input type="text" name="ID_Customer" class="form-control">
        </div>

      <label>Write a review <span>0/200</span></label>
      <textarea name="Desc" placeholder="How do you feel about our products...."></textarea>

      <div class="upload-section">
        <div class="upload-box">
          <p>📷<br />0/7</p>
        </div>
        <span>Submit your photos or videos here</span>
      </div>

      <button class="submit-btn">Send</button>
    </form>
    @if(session('success'))
    <script>
      alert("{{ session('success') }}");
    </script>
    @endif

  </div>
</body>

</html>