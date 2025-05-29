<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //

    public function Statistics(){
        return view('desgin.Statistics');
    }

    public function Orders(){
        return view('desgin.Buy');
    }


    

    public function store(Request $request)
    {
        $request->validate([
            'Name_Car' => 'required',
            'ID_Customer' => 'required|exists:customers,id',
            'ID_Product' => 'required|exists:products,id',
            'Oder_date' => 'required|date',
            'Money_Sum' => 'required|numeric',
        ]);

        Orders::create($request->all());

        return back()->with('success', 'Đặt hàng thành công!');
    }

    public function revenueChart()
{
    $data = Orders::table('orders')
        ->select(
            Orders::raw("DATE_FORMAT(Oder_date, '%Y-%m') as month"),
            Orders::raw("SUM(Money_Sum) as revenue")
        )
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    $months = $data->pluck('month');
    $revenues = $data->pluck('revenue');

    return view('desgin.Statistics', compact('months', 'revenues'));
}
}
