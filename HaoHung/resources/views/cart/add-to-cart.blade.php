<h2>Giỏ hàng</h2>

@if($cartItems->count())
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
@endif