<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailCar;
use App\Models\Product;

class DetailCarController extends Controller
{
    public function detail(){
        return view('user.detail');
    }
    
    public function showDetail(Request $request)
{
    $products = DetailCar::find($request->id); // hoặc DetailCar::first()
    
    $product = Product::find($request->id);

    $data = [
    'products' => $products,
    'product' => $product,
    ];
    return view('Function.detail', $data);
}
}