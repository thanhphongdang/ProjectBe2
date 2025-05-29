<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .option {
            border: 2px solid #ccc;
            padding: 15px;
            margin: 10px;
            cursor: pointer;
            display: inline-block;
            border-radius: 10px;
            transition: 0.3s;
        }
        .option:hover {
            border-color: #007bff;
            background-color: #f0f8ff;
        }
        .active {
            border-color: #007bff;
            background-color: #e6f0ff;
        }
        .qr-image {
            display: none;
            margin-top: 30px;
        }
        img {
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <h2>Chọn phương thức thanh toán</h2>

    <div id="payment-options">
        <div class="option" onclick="showQr('momo', this)">Chuyển khoản bằng MoMo</div>
        <div class="option" onclick="showQr('bank', this)">Chuyển khoản Ngân hàng</div>
    </div>

    <div id="qr-momo" class="qr-image">
        <h3>Mã QR MoMo</h3>
        <img src="{{ asset('image/0f4d6e77f304465a1f15.jpg') }}" alt="QR MoMo">
    </div>

    <div id="qr-bank" class="qr-image">
        <h3>Mã QR Ngân hàng</h3>
        <img src="{{ asset('image/c52056f3c08075de2c91.jpg') }}" alt="QR Vietcombank">
    </div>

    <script>
        function showQr(method, element) {
            // Ẩn tất cả QR
            document.querySelectorAll('.qr-image').forEach(el => el.style.display = 'none');
            // Bỏ active cũ
            document.querySelectorAll('.option').forEach(el => el.classList.remove('active'));
            // Hiện đúng QR
            document.getElementById('qr-' + method).style.display = 'block';
            // Đánh dấu đã chọn
            element.classList.add('active');
        }
    </script>

</body>
</html>
