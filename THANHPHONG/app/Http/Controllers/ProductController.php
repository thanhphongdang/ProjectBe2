<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products()
    {
        //
        $products = Product::all();
        return view('desgin.index', compact('products'));
    }

    // Hiển thị dữ liệu tất cả các sản phẩm
    public function displayProducts($id)
    {

       $product = Product::find($id);

        $data = [
            "product" => $product
        ];
        return view('desgin.index', $data);

        
    }
}