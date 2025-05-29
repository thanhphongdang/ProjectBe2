<!-- <h2>Giỏ hàng</h2> -->

<!-- @if($cartItems->count())
    <table>
        <tr>
            <th>Ảnh</th>
            <th>Tên xe</th>
            <th>Số lượng</th>
            <th>Giá</th>
        </tr>
        @foreach($cartItems as $item)
            <tr>
                <td><img src="{{ asset('Image/' . $item->Image) }}" width="80"></td>
                <td>{{ $item->Name_Car }}</td>
                <td>{{ $item->Quantity }}</td>
                <td>{{ number_format($item->Sum, 0, ',', '.') }} VND</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3"><strong>Tổng tiền</strong></td>
            <td><strong>
                {{ number_format($cartItems->sum('Sum'), 0, ',', '.') }} VND
            </strong></td>
        </tr>
    </table>
@else
    <p>Giỏ hàng trống.</p>
@endif -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product in Cart</title>
    <link rel="stylesheet" href="style.css" />
</head>
<style>
    body {
        margin: 0;
        font-family: Georgia, serif;
        background-color: #fff;
    }

    .container {
        max-width: 1000px;
        margin: auto;
        padding: 20px;
    }

    h1 {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .cart {
        background-color: #ddd;
        padding: 20px;
        border-radius: 8px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead th {
        text-align: left;
        font-style: italic;
        padding-bottom: 10px;
        border-bottom: 2px solid #000;
    }

    td {
        padding: 15px 10px;
        vertical-align: middle;
        border-bottom: 1px solid #000;
    }

    img {
        width: 100px;
        height: auto;
        display: block;
    }

    select {
        width: 100px;
        padding: 5px;
    }

    .delete-btn {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .pay-btn-container {
        margin-top: 20px;
        text-align: right;
    }

    .pay-btn {
        font-size: 2rem;
        background-color: #0094ff;
        color: #fff;
        padding: 10px 30px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
</style>

</style>



</style>

<body>
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





</body>


</html>