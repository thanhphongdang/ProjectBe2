<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products()
    {
        //
        $products = Product::all();
        return view('car_project.index', compact('products'));
    }

    // Hiển thị dữ liệu tất cả các sản phẩm
    public function displayProducts($id)
    {

       $product = Product::find($id);

        $data = [
            "product" => $product
        ];
        return view('car_project.index', $data);

        
    }

    public function show($id)
   {
     $product = Product::with('detail')->find($id); // load luôn bảng detail_cars

     if (!$product) {
        abort(404);
     }

     return view('product-detail', compact('product'));
   }

}
