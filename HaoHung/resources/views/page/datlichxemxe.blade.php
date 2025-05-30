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

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px #ccc;
        }

        header h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .car-img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        form h2 {
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        fieldset {
            border: none;
            display: flex;
            gap: 20px;
            margin-bottom: 10px;
        }

        .checkbox {
            font-size: 0.9rem;
        }

        button {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            width: 100px;
        }

        button:hover {
            background-color: #000;
        }

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
            background-color: white;
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
            background-color: white;
            padding: 20px;
            text-align: right;
            font-weight: bold;
            color: green;
            font-size: 18px;
        }
    </style>
</head>

<body>
    @include('outside.navbar-index')

    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; text-align: center; margin-bottom: 15px;">
            {{ session('error') }}
        </div>
    @endif


    {{-- @if ($errors->any())
    <div style="background-color: #fff3cd; color: #856404; padding: 10px; text-align: center;">
        <ul style="list-style: none; padding-left: 0;">
            @foreach ($errors as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <div class="container">
        <header>
            <h1>Schedule A Viewing</h1>
            <img src="{{ asset('img/Audir8.jpg') }}" alt="Car Image" class="car-img" height="50%"> <!-- Thay bằng link ảnh xe -->
        </header>

        <form class="form" action="{{ route('post.datlichxemxe') }}" method="POST">
            @csrf
            <h2>Schedule a viewing</h2>

            <label for="Name_Car">You Desired Model</label>
            <select id="Name_Car" name="Name_Car">
                <option value="Porsche 933">Porsche 933</option>
                <option value="Bentley Flying Spur">Bentley Flying Spur</option>
                <option value="Audi R8">Audi R8</option>
                <option value="Rolls Royce">Rolls Royce</option>
            </select>


            <label for="Name_User">Full name</label>
            <input type="text" id="Name_User" name="Name_User" value="{{ old('Name_User') }}">
            @error('Name_User')
                <div style="color:red;">{{ $message }}</div>
            @enderror

            <label for="Phone">Phone</label>
            <input type="tel" name="Phone" value="{{ old('Phone') }}">
            @error('Phone')
                <div style="color: red;">{{ $message }}</div>
            @enderror


            <label for="Email">Email</label>
            <input type="Email" id="Email" name="Email" value="{{ old('Email') }}">
            @error('Email')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="Dealer">Please select a dealer</label>
            <select id="Dealer" name="Dealer">
                <option value="Audi Ho Chi Minh">Audi Ho Chi Minh</option>
                <option value="Prosche Ha Noi">Prosche Ha Noi</option>
                <option value="Audi Ha Noi">Audi Ha Noi</option>
                <option value="Audi Da Nang">Audi Da Nang</option>
            </select>

            <label for="Address">Address</label>
            <input type="text" id="Address" name="Address" value="{{ old('Address') }}">
            @error('Address')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label class="checkbox">
                <input type="checkbox" required>
                I hereby consent Automotive Asia Limited Company (Audi Vietnam) can use my personal data for
                the purpose of sending me messages about products, services, customer care, and promotions,
                and other activities related to Audi Vietnam's business activities.
            </label>

            <button type="submit">Send</button>
        </form>
    </div>

    <script>
        setTimeout(function () {
            const alert = document.querySelector('[style*="background-color: #d4edda"]');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>

    <!-- chat voi AI -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="ChatBox" agent-id="a197d836-209a-4ff8-b1a4-643aacdd5ebf"
        language-code="vi"></df-messenger>

    <!-- Footer -->

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


    @if (session('success'))
        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3">
            <div class="toast align-items-center text-bg-success border-0 show" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            toastElList.forEach(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, { delay: 1000 });
                toast.show();
            });
        });
    </script>
</body>

</html>