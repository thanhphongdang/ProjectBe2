<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function showIndex(Request $request)
{
    $products = Product::all();
    // dd($products);

    $data = [
            'products'       => $products,
        ];
        // dd($data);
    return view('Function.index', $data);
}

}