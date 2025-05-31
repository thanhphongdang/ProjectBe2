<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Car Review</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #fff;
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



        .header {
            background-color: #f8f8f8;
            padding: 10px 20px;
            border-bottom: 2px solid #ccc;
        }

        .header h2 {
            margin: 0;
            padding: 10px 0;
        }

        .review-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .car-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .car-info img {
            width: 200px;
            height: auto;
            border-radius: 5px;
        }

        .car-details h3 {
            margin: 0;
        }

        .stars {
            margin: 20px 0;
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .stars span:hover,
        .stars span:hover~span {
            color: gold;
        }




        .submit-btn {
            background-color: #ff4d4d;
            color: white;
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            float: right;
        }

        .submit-btn:hover {
            background-color: #e60000;
        }

        .rating {
            direction: rtl;
            unicode-bidi: bidi-override;
            font-size: 2rem;
            display: inline-flex;
        }

        .rating input {
            display: none;
        }

        .rating label {
            color: #ddd;
            cursor: pointer;
        }

        .rating input:checked~label,
        .rating label:hover,
        .rating label:hover~label {
            color: #ffc107;
            /* Màu vàng */
        }

        /* select */
        .mt-3 {
            margin-top: 20px;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            color: #333;
            font-size: 15px;
        }

        select {
            width: 100%;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fff;
            font-size: 15px;
            color: #333;
            transition: border-color 0.3s ease;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            font-size: 14px;
            resize: none;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <!-- Navbar -->
    @include('outside.navbar-index')
    <div class="header">
        <h2>Your review of the product</h2>
    </div>

    <div class="review-container">
        <div class="car-info">
            <img src="{{ asset('image/1748505670_Roll-Royce.jpg') }}" alt="Car Image" />
            <div class="car-details">
                <h3>Name car</h3>
                <p>Car company / Car color</p>
            </div>
        </div>

        <form action="{{ route('createEvalutes') }}" method="POST">
            @csrf
            <div class="stars">
                <div class="rating">
                    <input type="radio" id="star5" name="Star" value="5"><label for="star5">★</label>
                    <input type="radio" id="star4" name="Star" value="4"><label for="star4">★</label>
                    <input type="radio" id="star3" name="Star" value="3"><label for="star3">★</label>
                    <input type="radio" id="star2" name="Star" value="2"><label for="star2">★</label>
                    <input type="radio" id="star1" name="Star" value="1"><label for="star1">★</label>
                </div>

            </div>
            <div class="mt-3">
                <label for="" class="form-label">ID Product</label>
                <select name="ID_Product" id="Id_Products" required>
                    <option value="">-- Chọn sản phẩm--</option>
                    @foreach ($products as $product)
                    <option value="{{ $product->Id_Products }}">{{ $product->Name_Car }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mt-3">
                <label for="" class="form-label">ID Customer</label>
                <select name="ID_Customer" id="ID_Customer" required>
                    <option value="">-- Chọn khách hàng --</option>
                    @foreach ($customers as $customer)
                    <option value="{{ $customer->ID_Customer }}">{{ $customer->Name }}</option>
                    @endforeach
                </select>
            </div>

            <label>Write a review <span>0/200</span></label>
            <textarea name="comment" placeholder="How do you feel about our products...."></textarea>

            <button class="submit-btn" type="submit">Send</button>
        </form>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Thành công!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            title: 'Lỗi!',
            text: "{{ session('error') }}",
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
</body>

</html>