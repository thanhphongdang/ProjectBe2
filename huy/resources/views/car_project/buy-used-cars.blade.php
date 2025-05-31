<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thu mua xe cũ</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }
    body { background-color: #f8f8f8; color: #333; }

    /* Navbar */
    .navbar { background-color: #000; padding: 10px 20px; }
    .nav-list { list-style: none; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
    .nav-list li { margin: 5px 10px; }
    .nav-list a { color: white; text-decoration: none; font-weight: bold; }
    .nav-list input[type="text"] { padding: 5px; border-radius: 4px; border: none; }
    .nav-list button { padding: 5px 10px; margin-left: 5px; border: none; background-color: white; border-radius: 4px; cursor: pointer; }

     .buy-used-wrapper {
        background-color: #e0e0e0;
        padding: 20px;
         min-height: 100vh;
    }
    .buy-used-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
    }
    .buy-used-image {
        width: 45%;
    }
    .buy-used-image img {
        max-width: 100%;
        border-radius: 8px;
    }
    .buy-used-form {
        width: 50%;
    }
    .buy-used-form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .buy-used-title {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .btn-request {
        background-color: #28c4f7;
        padding: 10px 25px;
        border: none;
        color: white;
        border-radius: 6px;
        font-size: 16px;
    }

    .advice-box {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: white;
    padding: 10px 15px;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 9999;
}

.advice-text {
    color: limegreen;
    font-size: 16px;
    font-family: monospace;
}

.pointer-icon,
.chat-icon {
    width: 32px;
    height: 32px;
    object-fit: cover;
    border-radius: 5px;
}
    </style>
</head>
<body>
    <!-- Navbar -->
  <nav class="navbar">
    <ul class="nav-list">
      <li><a href="#">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Make an Appointment</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="#">List Car</a></li>
      <li><a href="#">Customer Support</a></li>
      <li><a href="#">Introduce</a></li>
     <a href="{{ route('buy.used.cars') }}">Buying used cars</a>


      <li>
        <input type="text" placeholder="Search...">
        <button>🔍</button>
      </li>
    </ul>
  </nav>

  <div class="buy-used-wrapper">
    <div class="buy-used-title">Buying used cars</div>
    <div class="buy-used-container">
        <div class="buy-used-image">
          <img src="{{ asset('assets/img/bmw.jpg') }}" alt="BMW">
            <p style="margin-top: 20px; font-family: monospace; font-size: 18px;">
                Liquidation of old cars <br> at high prices nationwide
            </p>
        </div>
        <div class="buy-used-form">
            <form action="#" method="POST">
                @csrf
                <label>Full Name</label>
                <input type="text" name="full_name" required>

                <label>Address</label>
                <input type="text" name="address" required>

                <label>Phone number</label>
                <input type="text" name="phone" required>

                <label>Products for liquidation</label>
                <input type="text" name="product" required>

                <button class="btn-request" type="submit">Send request</button>
            </form>
        </div>
    </div>
</div>

<!-- Thông báo -->
<div id="successMessage" style="display:none; margin-top: 20px; color: green; font-family: monospace; font-size: 16px;">
    ✅ Yêu cầu của bạn đã được gửi thành công!
</div>

<script>
document.getElementById("requestForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Không gửi lên server
    document.getElementById("successMessage").style.display = "block"; // Hiện thông báo
    // Reset form nếu muốn
    this.reset();
});
</script>


<div class="advice-box">
    <span class="advice-text">Message for advice</span>
    <img src="{{ asset('assets/img/chaticon.jpg') }}" class="chat-icon" alt="Chat Icon">
</div>

</body>
</html>