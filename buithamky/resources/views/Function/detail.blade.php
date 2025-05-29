<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Product Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        header {
            background: #000;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .hero {
            position: relative;
            text-align: center;
            color: white;
        }

        .hero img {
            width: 100%;
            height: auto;
        }

        .hero-text {
            position: absolute;
            bottom: 20px;
            left: 30px;
            text-align: left;
        }

        .hero-text h1 {
            margin: 0;
            font-size: 36px;
        }

        .hero-text p {
            margin: 5px 0;
        }

        .specifications {
            background: white;
            padding: 30px;
            text-align: center;
        }

        .specifications h2 {
            font-family: 'Georgia', serif;
        }

        .specs-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .specs-image img {
            width: 300px;
            border-radius: 10px;
        }

        .specs-table {
            max-width: 400px;
            text-align: left;
        }

        .specs-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .specs-table th,
        .specs-table td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        .buy-section {
            margin-top: 20px;
        }

        .buy-section button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .comments {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
        }

        .comments textarea {
            width: 100%;
            height: 80px;
            margin-top: 10px;
        }

        .stars {
            color: gold;
        }

        .other-products {
            background: #f9f9f9;
            padding: 20px;
            text-align: center;
        }

        .product-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-card {
            background: white;
            padding: 10px;
            width: 150px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .pagination {
            margin-top: 10px;
        }

        .pagination a {
            margin: 0 5px;
            text-decoration: none;
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

    <section class="specifications">
        <h2>Specifications</h2>
        <div class="specs-container">
            <div class="specs-image">
                <img src="{{ asset('assets/img/' . $product->Image) }}" alt="avatar" height="500px">
            </div>
            <div class="specs-table">
                <table>
                    <tr>
                        <th>Engine</th>
                        <td>{{ $products->Engine_Type }}</td>
                    </tr>
                    <tr>
                        <th>Speed</th>
                        <td>{{ $products->Speed }}</td>
                    </tr>
                    <tr>
                        <th>Consumption</th>
                        <td>{{ $products->Car_consumption }}</td>
                    </tr>
                </table>
                <div class="buy-section">
                    <p>{{ $product->Information }}</p>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button>Buy</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Cmt -->
    <section class="comments">
        <h3>Comment</h3>
        <p>General Comments (3,4K)</p>
        <div class="stars">★★★★☆</div>
        <textarea placeholder="Write your comment here..."></textarea>
    </section>

</body>

</html>
