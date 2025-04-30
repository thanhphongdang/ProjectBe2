<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Trang chủ</title>

  <!-- Thêm Bootstrap để dùng hệ thống lưới -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    .footer { background-color: white; padding: 20px; text-align: right; font-weight: bold; color: green; font-size: 18px; }
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

  <!-- Slider -->
  <div class="slider-container">
    <div class="slider-wrapper">
      <img class="slider-image active" src="{{ asset('img/bmw.jpg') }}" alt="bmw">
      <img class="slider-image" src="{{ asset('img/xedep4kk.jpg') }}" alt="xedep4kk">
      <img class="slider-image" src="{{ asset('img/xedep4kkk.jpg') }}" alt="xedep4kkk">
    </div>
    <button class="slider-btn prev" onclick="changeSlide(-1)">❮</button>
    <button class="slider-btn next" onclick="changeSlide(1)">❯</button>
  </div>

  <!-- Product Section -->
  <section class="products container mt-5">
    <h2 class="mb-4">Product Hot</h2>

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

 <!-- Footer -->
<footer class="footer text-white" style="background: linear-gradient(to right, #131313, #131313); padding: 40px 20px;">
  <p>Hotline 📞 1800 9031</p>
  <div class="container">
    <h4 class="text-uppercase fw-bold mb-4 text-white">THÔNG TIN LIÊN HỆ</h4>
    <div class="row">
      <!-- Thời gian mở cửa -->
      <div class="col-md-4 mb-3">
        <h5 class="text-white"><span style="color: #fff;">⏰</span> Thời gian mở cửa</h5>
        <p style="color: #ff4d4d; font-size: 1.2rem; margin-bottom: 0;"><strong>07:30 – 20:00</strong></p>
        <p style="color: #ccc;">Mở cửa tất cả các ngày trong tuần kể cả ngày lễ</p>
      </div>

      <!-- Văn phòng Miền Bắc -->
      <div class="col-md-4 mb-3">
        <h5 class="text-white"><span style="color: #fff;">🏢</span> VĂN PHÒNG MIỀN BẮC</h5>
        <p><strong>Trụ sở: </strong> Số 2287 Đường Hùng Vương, Phường Nông Trang, Thành phố Việt Trì, Tỉnh Phú Thọ</p>
        <p><strong>📞:</strong> 1900 555 555</p>
      </div>

      <!-- Văn phòng Miền Nam -->
      <div class="col-md-4 mb-3">
        <h5 class="text-white"><span style="color: #fff;">🏢</span> VĂN PHÒNG MIỀN NAM</h5>
        <p><strong>Trụ sở: </strong> Lô 8A, Đường Đồng Khởi, Phường Tân Hiệp, Thành phố Biên Hòa, Tỉnh Đồng Nai</p>
        <p><strong>📞:</strong> 1800 6653</p>
      </div>
    </div>

    <hr style="border-color: rgba(255,255,255,0.4);">
    <div class="d-flex align-items-center justify-content-center">
      <div>
        <h3 class="text-center">Cảm ơn quý khách hàng đã tin tưởng, ủng hộ, tin cậy và sử dụng dịch vụ của cửa hàng chúng tôi!</h3>
      </div>
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