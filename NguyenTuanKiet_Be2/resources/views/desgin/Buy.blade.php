<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pay your car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .navbar {
            background: black;
            color: white;
            display: flex;
            justify-content: space-around;
            padding: 10px;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 20px;
            font-size: 32px;
        }

        .content {
            position: relative;
            margin: 0 200px;
            width: 70%;
            background: #e0e0e0;
            padding: 20px;
        }

        .section-title {
            font-weight: bold;
            font-style: italic;
            margin-top: 10px;
        }

        .info {
            margin: 10px 0;
        }

        .qr {
            float: right;
            position: absolute;
            top: 24%;
            right: 10%;
            margin-right: 50px;
        }

        .buttons {
            padding: 20px;
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .installment {
            background: black;
            color: white;
        }

        .complete {
            background: #0b93f6;
            color: white;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div>Home</div>
        <div>Categories</div>
        <div>Make an Appointment</div>
        <div>Shopping Cart</div>
        <div>Last Car</div>
        <div>Customer Support</div>
        <div>Introduce</div>
    </div>

    <div class="header">
        Pay your car
    </div>

    <div class="content">
        <form action="" method="POST">
            <div>
                <span class="section-title">Vehicle information</span>
                <div class="info">Name: {{ $product->Name_Car }}</div>
                <div class="info">Price: {{ $product->Price }}</div>
                @if($product->ID_Sale)
                <div class="info">Voucher: {{ $product->ID_Sale }}</div>
                @else
                <div class="info">Voucher: Không có giảm giá</div>
                @endif
            </div>

            <div>
                @if (isset($user) && $user)
                <div class="info">ID: {{ $user->id }}
                </div>
                <div class="info">Email: {{ $user->email }}</div>
                <div class="info">Full Name: {{ $user->name }}</div>
                <div class="info">Number: {{ $user->phone }}</div>
                @else
                <div class="info">Bạn chưa đăng nhập.</div>
                @endif
            </div>
        </form>


        <div class="qr">
            <strong>transfer method</strong><br>
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=payment-link" alt="QR Code">
        </div>
    </div>

    <div class="buttons">
        <button class="btn installment">Monthly installment</button>
        @if (isset($user) && $user)
        <button class="btn complete">Complete</button>
        @else
        <script>
            alert("Vui long đăng nhập trước khi đặt hàng")
        </script>
        @endif
    </div>

</body>

</html>