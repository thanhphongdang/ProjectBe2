<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Trang chủ</title>

  <!-- Thêm Bootstrap để dùng hệ thống lưới -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css" />

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
    }

    body > main {
      flex: 1;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }
    body { background-color: #f8f8f8; color: #333; }

    /* Navbar */
    .navbar { background-color: #000; padding: 10px 20px; }
    .nav-list { list-style: none; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
    .nav-list li { margin: 5px 10px; }
    .nav-list a { color: white; text-decoration: none; font-weight: bold; }
    .nav-list input[type="text"] { padding: 5px; border-radius: 4px; border: none; }
    .nav-list button { padding: 5px 10px; margin-left: 5px; border: none; background-color: white; border-radius: 4px; cursor: pointer; }

    /* Slider */
    .slider-container { position: relative; width: 100%; height: 550px; overflow: hidden; margin-bottom: 20px; }
    .slider-wrapper { position: relative; width: 100%; height: 100%; }
    .slider-image { position: absolute; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1s ease; border-radius: 10px; }
    .slider-image.active { opacity: 1; }
    .slider-btn { position: absolute; top: 50%; transform: translateY(-50%); background-color: rgba(0,0,0,0.5); color: white; font-size: 30px; padding: 8px 12px; cursor: pointer; border: none; border-radius: 5px; z-index: 10; }
    .slider-btn.prev { left: 10px; }
    .slider-btn.next { right: 10px; }

    /* Products */
    .products { padding: 40px 20px; text-align: center; }
    .products h2 { margin-bottom: 30px; font-size: 28px; }
    .product-card { background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 15px; height: 100%; }
    .product-card img { width: 100%; height: 150px; object-fit: cover; border-radius: 6px; }
    .product-card h3 { margin: 10px 0 5px; font-size: 18px; }
    .product-card p { margin: 5px 0; }
    .product-card button { padding: 8px 12px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; }
    .product-card button:first-of-type { background-color: black; color: white; }
    .product-card button:last-of-type { background-color: #ddd; }

    /* Footer */
    .footer {
      background: linear-gradient(to right, #131313, #131313);
      padding: 40px 20px;
      width: 100vw;
      color: white;
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
      <li>
        <input type="text" placeholder="Search...">
        <button>🔍</button>
      </li>
    </ul>
  </nav>

  <!-- Main content -->
  <main>
    <!-- Slider -->
    <div class="slider-container">
      <div class="slider-wrapper">
        <img class="slider-image active" src="{{ asset('img/Ferrari SF90 XX Stradale.jpg') }}" alt="bmw">
      <img class="slider-image" src="{{ asset('img/lamborghini.jpg') }}" alt="xedep4kk">
      <img class="slider-image" src="{{ asset('img/Ferrari-SF90.jpg') }}" alt="xedep4kkk">
      </div>
      <button class="slider-btn prev" onclick="changeSlide(-1)">❮</button>
      <button class="slider-btn next" onclick="changeSlide(1)">❯</button>
    </div>

    <!-- Bộ lọc danh mục -->
    <section class="products container mt-5">
      <div class="mb-4 text-center">
        <div class="d-flex flex-wrap justify-content-center gap-2">
          <a href="{{ route('products.index') }}" class="btn btn-outline-dark @if(!isset($currentCategory)) active @endif">All products</a>
          <a href="{{ route('products.category', urlencode('Audi')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Audi') active @endif">Audi</a>
          <a href="{{ route('products.category', urlencode('BMW')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'BMW') active @endif">BMW</a>
          <a href="{{ route('products.category', urlencode('Mercedes')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Mercedes') active @endif">Mercedes</a>
          <a href="{{ route('products.category', urlencode('Ferrari')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Ferrari') active @endif">Ferrari</a>
          <a href="{{ route('products.category', urlencode('Lamborghini')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Lamborghini') active @endif">Lamborghini</a>
          <a href="{{ route('products.category', urlencode('Porsche')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Porsche') active @endif">Porsche</a>
          <a href="{{ route('products.category', urlencode('Bugatti')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Bugatti') active @endif">Bugatti</a>
          <a href="{{ route('products.category', urlencode('Bentley')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Bentley') active @endif">Bentley</a>
          {{-- <a href="{{ route('products.category', urlencode('Roll-Royce')) }}" class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Roll-Royce') active @endif">Rolls Royce</a> --}}
        </div>
      </div>

      <div class="row">
        @foreach ($products as $product)
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
            <div class="product-card">
              <img src="{{ asset('img/' . $product->image_Product) }}" alt="{{ $product->name_Car }}">
              <h3>{{ $product->name_Car }}</h3>
              <p>{{ $product->car_Company }}</p>
              <p>Price: {{ $product->price }}</p>
              <p>Information: {{ $product->information }}</p>
              <p>Origin: {{ $product->countries }}</p>
              <div>
                <button>View</button>
                <button>Compare</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </main>

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
    setInterval(() => { changeSlide(1); }, 5000);
  </script>
</body>
</html>