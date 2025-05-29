<h2>Giỏ hàng</h2>

@if(session('cart') && count($cart))
    <table>
        <tr>
            <th>Ảnh</th>
            <th>Tên xe</th>
            <th>Số lượng</th>
            <th>Giá</th>
        </tr>
        @foreach($cart as $id => $item)
            <tr>
                <td><img src="{{ asset('image/' . $item['image']) }}" width="80"></td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ $item['price'] }}</td>
            </tr>
        @endforeach
    </table>
@else
    <p>Giỏ hàng trống.</p>
@endif
