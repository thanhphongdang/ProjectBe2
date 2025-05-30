<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            padding: 40px 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .cart {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-style: italic;
            background-color: #f1f1f1;
        }

        img {
            width: 100px;
            border-radius: 8px;
        }

        .btn-danger,
        .btn-primary {
            padding: 8px 15px;
            font-size: 1rem;
        }

        .pay-btn-container {
            text-align: right;
            margin-top: 30px;
        }

        .pay-btn {
            font-size: 1.2rem;
            background-color: #0094ff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
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
        <h1>Giỏ hàng của bạn</h1>

        @if($cartItems->count())
            <form action="{{ route('cart.clear') }}" method="POST" class="mb-3">
                @csrf
                <button type="submit" class="btn btn-danger">Xoá tất cả</button>
            </form>

            <div class="cart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên xe</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Voucher</th>
                            <th>Tổng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td><img src="{{ asset('image/' . $item->Image) }}" alt="Xe"></td>
                                <td>{{ $item->Name_Car }}</td>
                                <td>{{ number_format($item->product->Price) }} VND</td>
                                <td>{{ $item->Quantity }}</td>
                                <td>
                                    <select class="form-select sale-select" name="sale_id" data-item-id="{{ $item->id }}">
                                        <option value="0" data-discount="0">Chọn mã giảm giá ▼</option>
                                        @foreach($sales as $sale)
                                            <option value="{{ $sale->id }}" data-discount="{{ $sale->Moneny }}">
                                                {{ $sale->Code_Voucher }} - {{ number_format($sale->Moneny, 0, ',', '.') }} VND
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="total-after-sale" data-item-id="{{ $item->id }}"
                                    data-original-sum="{{ $item->Sum }}">
                                    {{ number_format($item->Sum, 0, ',', '.') }} VND
                                </td>
                                <td>
                                    <form action="{{ route('cart.delete', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-end"><strong>Tổng cộng:</strong></td>
                            <td colspan="2">
                                <strong id="grand-total">{{ number_format($cartItems->sum('Sum'), 0, ',', '.') }}
                                    VND</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="pay-btn-container">
                    <a href="£" class="pay-btn">Thanh toán</a>
                </div>
            </div>
        @else
            <div class="cart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên xe</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Voucher</th>
                            <th>Tổng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td><img src="...." alt="Xe"></td>
                                <td></td>
                                <td>......VND</td>
                                <td>....</td>
                                <td>
                                    <select class="form-select">
                                        <option>▼</option>
                                    </select>
                                </td>
                                <td>{{ number_format($item->Sum, 0, ',', '.') }} VND</td>
                                <td>
                                    <form action="{{ route('cart.delete', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-end"><strong>Tổng cộng:</strong></td>
                            <td colspan="2">
                                <strong>VND</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="pay-btn-container">
                    <a href="£" class="pay-btn">Thanh toán</a>
                </div>
            </div>
        @endif
    </div>

    @include('outside.footer-user')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <!-- tinh tien sale-->
     <script>
    document.querySelectorAll('.sale-select').forEach(select => {
        select.addEventListener('change', function() {
            const discount = parseInt(this.selectedOptions[0].dataset.discount) || 0;
            const itemId = this.dataset.itemId;

            // Lấy cell tổng tiền gốc của sản phẩm
            const sumCell = document.querySelector(`.total-after-sale[data-item-id='${itemId}']`);
            const originalSum = parseInt(sumCell.dataset.originalSum);

            // Tính lại tổng sau khi trừ tiền giảm
            let newSum = originalSum - discount;
            if (newSum < 0) newSum = 0;

            // Cập nhật cột tổng tiền sản phẩm
            sumCell.textContent = newSum.toLocaleString('vi-VN') + ' VND';

            // Cập nhật tổng tiền toàn giỏ
            updateGrandTotal();
        });
    });

    function updateGrandTotal() {
        let total = 0;
        document.querySelectorAll('.total-after-sale').forEach(cell => {
            // Lấy số nguyên từ chuỗi dạng "1.234.567 VND"
            let val = cell.textContent.replace(/[^\d]/g, '');
            total += parseInt(val) || 0;
        });

        document.getElementById('grand-total').textContent = total.toLocaleString('vi-VN') + ' VND';
    }
</script>

</body>

</html>