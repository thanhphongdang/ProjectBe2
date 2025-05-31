<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailCarController extends Controller
{
    public function show($id)
   {
     $product = Product::findOrFail($id); // Tìm sản phẩm theo ID

     $relatedProducts = Product::where('Car_Company', $product->Car_Company)
        ->where('id', '!=', $product->id)
        ->take(4)
        ->get();

     return view('car_project.product-detail', compact('product', 'relatedProducts'));
   }

   
}
