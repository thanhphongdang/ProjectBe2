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
    <!-- ✅ Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        const names = ["NGUYEN VAN A", "TRAN THI B", "LE VAN C", "PHAM MINH D", "DO ANH E"];
        const notes = ["THANH TOAN 50% HOA DON"];

        function getRandomAccount() {
            return Math.floor(100000000 + Math.random() * 900000000); // 9 số
        }

        function getRandomName() {
            return names[Math.floor(Math.random() * names.length)];
        }

        function getRandomNote() {
            return notes[Math.floor(Math.random() * notes.length)] + ' ' + Math.floor(Math.random() * 1000);
        }

        function getRandomAmount() {
            return (Math.floor(Math.random() * 900) + 100) * 1000; // từ 100.000 -> 1.000.000
        }

        function generateRandomInfo() {
            document.getElementById('account_no').value = getRandomAccount();
            document.getElementById('account_name').value = getRandomName();
            document.getElementById('add_info').value = getRandomNote();
            document.getElementById('amount').value = getRandomAmount();
        }

        function updateQR() {
            const bankId = document.getElementById('bank').value;
            if (!bankId) {
                document.getElementById('qr').innerHTML = '<p class="text-danger">Vui lòng chọn ngân hàng!</p>';
                return;
            }

            generateRandomInfo();

            const accountNo = document.getElementById('account_no').value.trim();
            const accountName = document.getElementById('account_name').value.trim().toUpperCase();
            const amount = document.getElementById('amount').value.trim();
            const addInfo = document.getElementById('add_info').value.trim();

            let qrUrl = `https://img.vietqr.io/image/${bankId}-${accountNo}-compact2.png?accountName=${encodeURIComponent(accountName)}`;
            if (amount) qrUrl += `&amount=${amount}`;
            if (addInfo) qrUrl += `&addInfo=${encodeURIComponent(addInfo)}`;
            document.getElementById('qr').innerHTML = `<img src="${qrUrl}" class="img-fluid border rounded shadow mt-3" width="300" alt="QR VNPAY">`;
        }
    </script>
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

    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="mb-4 text-center text-primary">Tạo mã QR VNPAY</h2>

                <div class="mb-3">
                    <label class="form-label">Ngân hàng:</label>
                    <select id="bank" class="form-select" onchange="updateQR()">
                        <option value="">-- Chọn ngân hàng --</option>
                        <option value="vcb">Vietcombank</option>
                        <option value="bidv">BIDV</option>
                        <option value="vietinbank">VietinBank</option>
                        <option value="agribank">Agribank</option>
                        <option value="acb">ACB</option>
                        <option value="tcb">Techcombank</option>
                        <option value="mb">MB Bank</option>
                    </select>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Số tài khoản:</label>
                        <input type="text" id="account_no" class="form-control" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tên tài khoản:</label>
                        <input type="text" id="account_name" class="form-control" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Số tiền (VNĐ):</label>
                        <input type="number" id="amount" class="form-control" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nội dung chuyển khoản:</label>
                        <input type="text" id="add_info" class="form-control" readonly>
                    </div>
                </div>

                <div id="qr" class="text-center mt-4">
                    <p class="text-muted">Chọn ngân hàng để tạo mã QR...</p>
                </div>
            </div>
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