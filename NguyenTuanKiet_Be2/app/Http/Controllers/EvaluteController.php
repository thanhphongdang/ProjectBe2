<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evalute;
use Illuminate\Support\Facades\Auth;

class EvaluteController extends Controller
{
    //
    public function Evalutes()
    {
        return view("desgin.Evalues");
    }

    public function createEvalutes(Request $request)
    {
        $request->validate([
            'ID_Product' => 'required|exists:products,Id_Products',
            'Star' => 'required|integer|min:1|max:5',
        ]);

        $data = $request->all();
        $check =  Evalute::create([
            'ID_Product' => $request->ID_Product,
            // 'ID_Customer' => Auth::user()->ID_Customer, // lấy ID khách hàng từ user đăng nhập
            'ID_Customer' => $data['ID_Customer'], 
            'Evalute_Date' => now(),
            'Star' => $request->Star,
            'Desc' => $data['Desc']
        ]);

        return redirect()->route('createEvalutes')->with('success', 'Đã đánh giá thành công!');
    }
}
