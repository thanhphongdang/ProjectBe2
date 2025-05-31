<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chi Tiết</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body, html {
      height: 100%;
      background-color: black;
    }

    .product-section {
      position: relative;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      margin-top: 60px; /* để tránh navbar che */
    }

    .product-section img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .product-info {
      position: absolute;
      bottom: 50px;
      left: 50px;
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 30px;
      border-radius: 10px;
      max-width: 600px;
    }

    .product-info h1 {
      font-size: 42px;
      font-style: italic;
      margin-bottom: 20px;
    }

    .product-info p {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .product-info span {
      font-weight: bold;
      color: #fdd835;
    }

    /* Navbar */
    .navbar {
      width: 100%;
      background-color: rgba(0, 0, 0, 0.85);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 9999;
    }

    .nav-list {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      flex-wrap: wrap;
      list-style: none;
      padding: 10px 20px;
      gap: 15px;
    }

    .nav-list li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
    }

    .nav-list .search-box {
      margin-left: auto;
      display: flex;
      align-items: center;
    }

    .nav-list .search-box input[type="text"] {
      padding: 5px 10px;
      border-radius: 4px;
      border: none;
      outline: none;
    }

    .nav-list .search-box button {
      padding: 5px 10px;
      margin-left: 5px;
      border: none;
      background-color: white;
      color: black;
      border-radius: 4px;
      cursor: pointer;
    }

    .specs-section {
      background-color: #fff;
      color: #111;
      padding: 40px;
      border-top: 2px solid #ccc;
    }

    .specs-header {
      width: 100vw;
      background-color: black;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-left: calc(-50vw + 50%);
    }

    .specs-title {
      font-family: 'Georgia', serif;
      font-style: italic;
      font-size: 36px;
      margin: 0;
      color: #fff;
    }

    .spec-wrapper {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      gap: 30px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .spec-image {
      width: 400px;
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .spec-table {
      border-collapse: collapse;
      width: 400px;
    }

    .spec-table th,
    .spec-table td {
      border: 1px solid #ccc;
      padding: 8px 12px;
      text-align: left;
    }

    .specs-bottom {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      margin-top: 30px;
    }

    .price-note {
      font-size: 14px;
      color: #555;
      text-align: center;
    }

    .specs-actions {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .buy-btn {
      background-color:rgb(1, 11, 1);
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .buy-btn:hover {
      background-color: #67cc67;
    }

    .heart-icon {
      font-size: 30px;
      cursor: pointer;
      transition: color 0.3s ease;
      color: #999;
    }

    .heart-icon.active {
      color: black;
    }

    .comment-section {
  margin-top: 40px;
  background-color: #f8f8f8;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
}

.comment-header {
  display: flex;
  gap: 10px;
  margin-bottom: 10px;
  flex-wrap: wrap;
}

.comment-tab {
  padding: 6px 12px;
  border: 1px solid #ccc;
  background-color: white;
  cursor: pointer;
  font-weight: bold;
  border-radius: 4px;
}

.comment-tab.active {
  border: 2px solid black;
}

.stars {
  color: yellow;
  font-size: 18px;
  margin-left: 5px;
}

.comment-box {
  width: 100%;
  height: 120px;
  border: 1px solid #ccc;
  border-radius: 6px;
  padding: 10px;
  font-size: 14px;
  resize: vertical;
  font-family: inherit;
  outline: none;
}


.other-products {
  margin-top: 60px;
  padding: 40px;
  background-color: #fafafa;
  text-align: center;
}

.other-products h2 {
  background-color: black;
  color: white;
  font-family: 'Georgia', serif;
  font-size: 28px;
  padding: 10px;
  margin: 0 0 30px 0;
  letter-spacing: 2px;
  width: 100vw;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}


.product-list {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 30px;
  margin-bottom: 30px;
}

.product-card {
  background: white;
  border: 1px solid #ccc;
  border-radius: 6px;
  width: 200px;
  padding: 15px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  text-align: center;
}

.product-card img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.product-card .title {
  font-weight: bold;
  margin: 10px 0 5px;
}

.product-card .price {
  color: #ccc000;
  font-weight: bold;
  margin: 5px 0;
}

.product-card .evaluate {
  margin: 5px 0;
}

.stars {
  color: yellow;
}

.view-btn {
  background-color: black;
  color: white;
  border: none;
  padding: 8px 15px;
  margin-top: 8px;
  cursor: pointer;
  border-radius: 4px;
  box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}

.pagination {
  display: flex;
  justify-content: center;
  gap: 8px;
}

.page-btn {
  padding: 6px 12px;
  border: none;
  background-color:rgb(1, 6, 12);
  color: white;
  font-weight: bold;
  border-radius: 4px;
  cursor: pointer;
}

.page-btn.active {
  background-color: white;
  color: black;
  border: 2px solidrgb(1, 7, 14);
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



      <li class="search-box">
        <input type="text" placeholder="Search...">
        <button>🔍</button>
      </li>
    </ul>
  </nav>

  <div class="product-section">
    <img src="{{ asset('img/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
    <div class="product-info">
      <h1>{{ $product->Name_Car }}</h1>
      <p><span>Hãng:</span> {{ $product->Car_Company }}</p>
      <p><span>Giá:</span> {{ number_format($product->Price, 0, ',', '.') }} VNĐ</p>
      <p><span>Thông tin:</span> {{ $product->Information }}</p>
      <p><span>Xuất xứ:</span> {{ $product->Countries }}</p>
    </div>
  </div>

  <section class="specs-section">
    <div class="specs-header">
      <h2 class="specs-title">Specifications</h2>
    </div>
    <div class="spec-wrapper">
      <img class="spec-image" src="{{ asset('img/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
      <table class="spec-table">
        <tr><th>Parameter</th><td>300 PS (220 kW)</td></tr>
        <tr><th>Maximum torque</th><td>380 Nm</td></tr>
        <tr><th>Acceleration</th><td>4.9 seconds (4.7s with Sport Chrono Package)</td></tr>
        <tr><th>Maximum speed</th><td>275 km/h</td></tr>
        <tr><th>Combined consumption</th><td>-</td></tr>
        <tr><th>CO2 emissions</th><td>-</td></tr>
      </table>
    </div>

    <!-- Phần căn giữa: Dòng chữ + Buy + Trái tim -->
    <div class="specs-bottom">
      <p class="price-note">
        Standard prices include import duty, excise tax and value added tax...
      </p>
      <div class="specs-actions">
        <button class="buy-btn">Buy</button>
        <span class="heart-icon" onclick="toggleHeart(this)">🤍</span>
      </div>
    </div>
  </section>

  <script>
    function toggleHeart(element) {
      element.classList.toggle("active");
      element.textContent = element.classList.contains("active") ? "🖤" : "🤍";
    }
  </script>
  <!-- Phần Comment -->
<div class="comment-section">
  <div class="comment-header">
    <button class="comment-tab active">Comment</button>
    <button class="comment-tab">General Comments (3,4K)</button>
    <button class="comment-tab">Evaluate 
      <span class="stars">⭐ ⭐ ⭐ ⭐</span>
    </button>
  </div>
  <textarea class="comment-box" placeholder="Write your comment here..."></textarea>
</div>

<script>
  const tabs = document.querySelectorAll('.comment-tab');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });
</script>

<!-- Other Products Section -->
<section class="other-products">
  <h2>OTHER PRODUCTS</h2>
  <div class="product-list">
    <!-- 1 -->
    <div class="product-card">
      <img class="spec-image" src="{{ asset('img/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
      <p class="title">Audi R8</p>
      <p class="price">Price: 100.000 USD</p>
      <p class="evaluate">Evaluate: <span class="stars">⭐ ⭐ ⭐ ⭐ ⭐</span></p>
      <button class="view-btn">View</button>
    </div>
    <!-- 2 -->
    <div class="product-card">
     <img class="spec-image" src="{{ asset('img/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
      <p class="title">Audi R8</p>
      <p class="price">Price: 100.000 USD</p>
      <p class="evaluate">Evaluate: <span class="stars">⭐ ⭐ ⭐ ⭐ ⭐</span></p>
      <button class="view-btn">View</button>
    </div>
    <!-- 3 -->
    <div class="product-card">
     <img class="spec-image" src="{{ asset('img/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
      <p class="title">Audi R8</p>
      <p class="price">Price: 100.000 USD</p>
      <p class="evaluate">Evaluate: <span class="stars">⭐ ⭐ ⭐ ⭐ ⭐</span></p>
      <button class="view-btn">View</button>
    </div>
    <!-- 4 -->
    <div class="product-card">
      <img class="spec-image" src="{{ asset('img/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
      <p class="title">Audi R8</p>
      <p class="price">Price: 100.000 USD</p>
      <p class="evaluate">Evaluate: <span class="stars">⭐ ⭐ ⭐ ⭐ ⭐</span></p>
      <button class="view-btn">View</button>
    </div>
  </div>

  <div class="pagination">
    <button class="page-btn">BACK</button>
    <button class="page-btn active">1</button>
    <button class="page-btn">2</button>
    <button class="page-btn">3</button>
    <button class="page-btn">NEXT</button>
  </div>
</section>


</body>
</html>
