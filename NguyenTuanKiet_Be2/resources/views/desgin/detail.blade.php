<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <title>Car Category</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <style>
    body {

      height: 100vh;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      color: #333;
    }


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
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

    /* Slider */
    .slider-container {
      position: relative;
      width: 80%;
      height: 400px;
      overflow: hidden;
    }

    .slider-wrapper {
      position: relative;
      width: 80%;
      height: 100%;
    }

    .slider-container {
      position: relative;
      width: 80%;
      height: 550px;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .slider-wrapper {
      position: relative;
      width: 80%;
      height: 100%;
    }

    .slider-image {
      position: absolute;
      width: 80%;
      height: 100%;
      object-fit: cover;
      /* Giúp ảnh vừa khung mà không bị méo */
      opacity: 0;
      transition: opacity 1s ease;
      border-radius: 10px;
    }

    .slider-image.active {
      opacity: 1;
    }

    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 30px;
      padding: 8px 12px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      z-index: 10;
    }

    .slider-btn.prev {
      left: 10px;
    }

    .slider-btn.next {
      right: 10px;
    }


    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 30px;
      padding: 8px 12px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      z-index: 10;
    }

    .slider-btn.prev {
      left: 10px;
    }

    .slider-btn.next {
      right: 10px;
    }

    .slider {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .slider-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .dots {
      text-align: center;
      margin-top: -30px;
      position: relative;
      z-index: 1;
    }

    .dot {
      height: 12px;
      width: 12px;
      margin: 0 5px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }

    .dot.active {
      background-color: #333;
    }

    /* Product Section */
    .products {
      padding: 40px 20px;
      text-align: center;
    }

    .products h2 {
      margin-bottom: 30px;
      font-size: 28px;
    }

    .product-list {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 250px;
      padding: 15px;
      text-align: center;
    }

    .product-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 6px;
    }

    .product-card h3 {
      margin: 10px 0 5px;
      font-size: 18px;
    }

    .product-card p {
      margin: 5px 0;
    }

    .product-card button {
      padding: 8px 12px;
      margin: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .product-card button:first-of-type {
      background-color: black;
      color: white;
    }

    .product-card button:last-of-type {
      background-color: #ddd;
    }

    /* Footer */
    .footer {

      background: linear-gradient(to right, #131313, #131313);
      padding: 40px 20px;
      width: 100vw;
      color: white;

    }

    /* chi tiet */
    .specs {
      padding: 0 150px;
      background-color: white;
    }

    .specs h2 {
      text-align: center;
    }

    .spec-table {
      width: 100%;
      border-collapse: collapse;
    }

    .spec-table td,
    .spec-table th {
      border: 1px solid #ddd;
      padding: 10px;
    }

    .comments-section {
      padding: 0 10px 150px 150px;
      background-color: #fff;
    }

    .other-products {
      padding: 20px;
      background-color: black;
      color: white;
      text-align: center;
    }

    .product-card {
      display: inline-block;
      background-color: white;
      color: black;
      width: 200px;
      margin: 10px;
      padding: 10px;
      border-radius: 10px;
    }

    .comment-box {
      margin-top: 10px;
    }

    .product-image {
      position: relative;
      top: 30px;
      left: 20%;
      padding-bottom: 50px;
    }

    /* Comments Section Styles */
    .comments-section {
      width: 60%;
      margin: 20px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Section Heading */
    .comments-section h3 {
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: bold;
      color: #333;
    }

    /* Form Styling */
    .comment-box {
      margin-bottom: 15px;
    }

    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      resize: vertical;
      background-color: #fafafa;
    }

    /* Submit Button Styling */
    button.btn-primary {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button.btn-primary:hover {
      background-color: #0056b3;
    }



    .comment {
      padding: 15px;
      background-color: #ffffff;
      border-radius: 5px;
      margin-bottom: 15px;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    .comment p {
      margin: 0;
      font-size: 16px;
      color: #333;
    }

    .comment strong {
      color: #007bff;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <ul class="nav-list">
      <li><a href="{{ route('indexHome')  }}">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="{{ route('appointment')  }}">Make an Appointment</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="#">List Car</a></li>
      <li><a href="#">Customer Support</a></li>
      <li><a href="#">Introduce</a></li>
      <li><input type="text" placeholder="Search..."> <button>🔍</button></li>
    </ul>
  </nav>

  <section class="product-image">
    <img src="{{ asset('image/' . $products->Image) }}" style="height: 500px; width: 800px;" alt=" {{ $products->Name_Car }}">
  </section>

  <section class="specs">
    <h2>{{ $products->Name_Car }}</h2>
    <table class="spec-table">
      <tr>
        <th>Parameter</th>
        <th>Details</th>
      </tr>
      <tr>
        <td>Khối lượng</td>
        <td>1480 (GKG)</td>
      </tr>
      <tr>
        <td>Kiểu động cơ</td>
        <td>6 xi-lanh nằm ngang, hút khí tự nhiên</td>
      </tr>
      <tr>
        <td>Dung tích</td>
        <td>3746 cm³</td>
      </tr>
      <tr>
        <td>Hiệu suất</td>
        <td>235 kW</td>
      </tr>
      <tr>
        <td>{{ number_format($products->Price) }}</td>
        <td>235 kW</td>
      </tr>
    </table>
    <p>
      {{ $products->Information }}
    </p>
    <button class="buy-button btn btn-primary" type="submit"><a style="color: white; text-decoration: none;" href="{{ route('Buy' , ['id' => $products->id]) }}">Buy</a></button>
  </section>

  <section class="comments-section">
    <h3>Leave a Comment</h3>

    <!-- Comment Form -->
    <form action="{{ route('comments.create') }}" method="POST">
      @csrf
      <!-- Hidden Product ID -->
      <input type="hidden" name="product_id" value="{{ $products->id }}">

      <!-- Comment Text Area -->
      <div class="comment-box">
        <textarea placeholder="Write your comment here..." name="content" rows="6" cols="60"></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>

    <!-- Display Comments (Optional Section) -->
    <div class="comments-list">
      <!-- Example of a comment -->
      <div class="comment">
        <p><strong>John Doe:</strong> This is a great product! Highly recommend it.</p>
      </div>
    </div>
  </section>
  @if(session('success'))
  <script>
    alert("{{ session('success') }}");
  </script>
  @endif



  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  <df-messenger
    intent="WELCOME"
    chat-title="ChatBox"
    agent-id="a197d836-209a-4ff8-b1a4-643aacdd5ebf"
    language-code="vi"></df-messenger>

  <!-- Chat icon -->
  <!-- <div id="chat-icon" onclick="toggleChatBox()">💬</div> -->

  <!-- Chat box -->
  <!-- Chat box -->
  <!-- ĐỔI TỪ form thành div -->
  <!-- <div id="chat-box">
    <div class="chat-header">🤖 Xin chào, bạn cần gì ở tôi?</div>
    <div class="chat-content" id="chat-content">
      <div class="bot-message">Xin chào, bạn cần gì ở tôi ?</div>
      <button type="button" onclick="sendQuickMessage('Tôi cần giao dịch xe cũ')">Tôi cần giao dịch xe cũ</button>
      <button type="button" onclick="sendQuickMessage('Tôi cần bạn giới thiệu về chiếc xe này...')">Tôi cần bạn giới thiệu về
        chiếc xe này...</button>
    </div>
    <div class="chat-input">
      <input type="text" id="user-input" placeholder="gửi văn bản của bạn tại đây..." onkeypress="handleKeyPress(event)" />
      <button type="button" onclick="sendMessage()">➤</button>
    </div>
  </div> -->
  <!-- Footer -->
  <footer class="footer text-white">
    <p class="text-end me-4">Hotline 📞 1800 9031</p>
    <div class="container">
      <h4 class="text-uppercase fw-bold mb-4 text-white">THÔNG TIN LIÊN HỆ</h4>
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5 class="text-white">⏰ Thời gian mở cửa</h5>
          <p style="color: #ff4d4d; font-size: 1.2rem; margin-bottom: 0;"><strong>07:30 – 20:00</strong></p>
          <p style="color: #ccc;">Mở cửa tất cả các ngày trong tuần kể cả ngày lễ</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5 class="text-white">🏢 VĂN PHÒNG MIỀN BẮC</h5>
          <p><strong>Trụ sở:</strong> Số 2287 Đường Hùng Vương, Phường Nông Trang, Thành phố Việt Trì, Tỉnh Phú Thọ</p>
          <p><strong>📞:</strong> 1900 555 555</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5 class="text-white">🏢 VĂN PHÒNG MIỀN NAM</h5>
          <p><strong>Trụ sở:</strong> Lô 8A, Đường Đồng Khởi, Phường Tân Hiệp, Thành phố Biên Hòa, Tỉnh Đồng Nai</p>
          <p><strong>📞:</strong> 1800 6653</p>
        </div>
      </div>
      <hr style="border-color: rgba(255,255,255,0.4);">
      <div class="d-flex align-items-center justify-content-center">
        <h3 class="text-center">Cảm ơn quý khách hàng đã tin tưởng, ủng hộ, tin cậy và sử dụng dịch vụ của cửa hàng chúng tôi!</h3>
      </div>
    </div>
  </footer>


  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider-image');

    function changeSlide(step) {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + step + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
    }

    // Tự động chuyển ảnh mỗi 5 giây
    setInterval(() => {
      changeSlide(1);
    }, 5000);
  </script>
  <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>