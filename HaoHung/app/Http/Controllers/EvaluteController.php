<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evalute;
use App\Models\Product;
use App\Models\Customer;

class EvaluteController extends Controller
{
    public function Evalutes()
    {
        return view('page.Evalues');
    }
    //
    public function store(Request $request)
    {
        $request->validate([
            'ID_Product' => 'required',
            'ID_Customer' => 'required',
            'Star' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',

        ]);

        try {
            Evalute::create([
                'ID_Product' => $request->ID_Product,
                'ID_Customer' => $request->ID_Customer,
                'Evalute_Date' => now(),
                'Star' => $request->Star,
                'comment' => $request->comment,
            ]);
            return redirect()->route('page.Evalutes')->with('success', 'Đã đánh giá thành công!');
        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra khi đánh giá, vui lòng thử lại!');
        }
    }

    //hiển thị dữ liệu ở trang Evalutes
    public function listProduct_Customer()
    {
        $products = Product::all();
        $customers = Customer::all();

        return view('page.Evalues', compact('products', 'customers'));
    }
}
