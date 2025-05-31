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

    <div class="container">
        <h1>Product in card</h1>

        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Xoá tất cả</button>
        </form>





        <div class="cart">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Voucher</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td><img src="{{ asset('image/' . $item->Image) }}" width="80"></td>
                            <td>{{ $item->Name_Car }}</td>
                            <td>{{ $product->Price}} VND</td>
                            <td>{{ $item->Quantity }}</td>
                            <td>
                                <select>
                                    <option>▼</option>
                                </select>
                            </td>
                            <td>{{ number_format($cartItems->sum('Sum'), 0, ',', '.') }} VND</td>
                            <td>
                                <form action="{{ route('cart.delete', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Xoa sản phẩm</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pay-btn-container">
            <button class="pay-btn">Pay</button>
        </div>
    </div>

    <!-- chat voi AI -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="ChatBox" agent-id="a197d836-209a-4ff8-b1a4-643aacdd5ebf"
        language-code="vi"></df-messenger>

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