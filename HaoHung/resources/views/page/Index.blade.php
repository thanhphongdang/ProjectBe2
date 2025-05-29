<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>

    <!-- Thêm Bootstrap để dùng hệ thống lưới -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- custom css -->
    <link id="style.css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />

    <link id="style.css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background-color: #f8f8f8;
            color: #333;
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
            background-color: black;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Slider */
        .slider-container {
            position: relative;
            width: 100%;
            height: 550px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slider-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        /* Products */
        .products {
            padding: 40px 20px;
            text-align: center;
        }

        .products h2 {
            margin-bottom: 30px;
            font-size: 28px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            height: 100%;
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
    </style>
</head>

<body>
    @include('outside.navbar-index')

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
    <!-- <section class="products container mt-5">
        <h2 class="mb-4">Product Hot</h2>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="product-card">
                        <img src="{{ asset('image/' . $product->Image) }}" alt="{{ $product->Name_Car }}">
                        <h3>{{ $product->Name_Car }}</h3>
                        <p>{{ $product->Car_Company }}</p>
                        <p>Price: {{ $product->Price }}</p>
                        <p>Information: {{ $product->Information }}</p>
                        <p>Origin: {{ $product->Countries }}</p>
                        <div>
                            <button>View</button>
                            <button>Compare</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> -->

    <section class="products container mt-5">
        <div class="mb-4 text-center">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="{{ route('products.index') }}"
                    class="btn btn-outline-dark @if(!isset($currentCategory)) active @endif">All products</a>
                <a href="{{ route('products.category', urlencode('Audi')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Audi') active @endif">Audi</a>
                <a href="{{ route('products.category', urlencode('BMW')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'BMW') active @endif">BMW</a>
                <a href="{{ route('products.category', urlencode('Mercedes')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Mercedes') active @endif">Mercedes</a>
                <a href="{{ route('products.category', urlencode('Ferrari')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Ferrari') active @endif">Ferrari</a>
                <a href="{{ route('products.category', urlencode('Lamborghini')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Lamborghini') active @endif">Lamborghini</a>
                <a href="{{ route('products.category', urlencode('Porsche')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Porsche') active @endif">Porsche</a>
                <a href="{{ route('products.category', urlencode('Bugatti')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Bugatti') active @endif">Bugatti</a>
                <a href="{{ route('products.category', urlencode('Bentley')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Bentley') active @endif">Bentley</a>
                <a href="{{ route('products.category', urlencode('Nissan')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Nissan') active @endif">Nissan</a>
                {{-- <a href="{{ route('products.category', urlencode('Roll-Royce')) }}"
                    class="btn btn-outline-dark @if(isset($currentCategory) && $currentCategory == 'Roll-Royce') active @endif">Rolls
                    Royce</a> --}}
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                    <div class="product-card">
                        <input type="hidden" name="id" value="{{ $product->Id_Products }}">
                        <img src="{{ asset('image/' . $product->Image) }}" alt="{{ $product->name_Car }}">
                        <h3>{{ $product->Name_Car }}</h3>
                        <p>{{ $product->Car_Company }}</p>
                        <p>Price: {{ $product->Price }}</p>
                        <p>Information: {{ $product->information }}</p>
                        <p>Origin: {{ $product->Countries }}</p>
                        <div>
                            <button>View</button>
                            <button>Compare</button>
                            <button type="submit">Add to Cart</button>
                        </div>
                    </div>
                    </form>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    @include('outside.footer-user')

    <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>

    <!-- Chart -->
    <script src="{{ asset('assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <!-- Google map chart -->
    <script src="{{ asset('assets/plugins/charts/google-map-loader.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts/google-map.js') }}"></script>

    <!-- Date Range Picker -->
    <script src="{{ asset('assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/date-range.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

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