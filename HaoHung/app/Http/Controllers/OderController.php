<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oder;

class OderController extends Controller
{
    public function showTracking(Oder $oder)
{
    $trackings = $oder->trackings()->orderBy('time')->get();
    return view('page.theoDoiDonHang', ['order' => $oder, 'trackings' => $trackings]);
}

public function show($id)
{
    $order = Oder::with('trackings')->findOrFail($id);

    // Thứ tự các bước đặt hàng
    $steps = [
        'Đơn hàng đã đặt',
        'Đã xác nhận thông tin',
        'Đang giao',
        'Đã giao',
        'Đánh giá'
    ];

    // Gắn tracking tương ứng theo từng bước
    $stepTrackings = collect($steps)->map(function ($status) use ($order) {
        return $order->trackings->firstWhere('status', $status);
    });

    return view('orders.track', compact('order', 'steps', 'stepTrackings'));
}

}