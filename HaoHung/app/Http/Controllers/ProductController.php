<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    //hiện thị sản phẩm
    
    public function addProduct()
    {
        return view('page.add-product');
    }

     public function products()
    {
        //
        $products = Product::all();
        return view('page.Index', compact('products'));
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
    
}
