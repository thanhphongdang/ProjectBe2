<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function products()
    {
        //
        $products = Product::all();
        return view('desgin.index', compact('products'));
    }

    // // Hiển thị dữ liệu tất cả các sản phẩm
    // public function displayProducts($id)
    // {

    //    $product = Product::find($id);

    //     $data = [
    //         "product" => $product
    //     ];
    //     return view('desgin.index', $data);

        
    // }

    public function index()
    {
        $products = Product::all();
        return view('desgin.index', compact('products'));
    }

    // Lọc sản phẩm theo hãng xe
    public function filterByCategory($category)
    {
        $category = urldecode($category);
        $category = trim($category);
        $products = Product::whereRaw('LOWER(car_Company) LIKE ?', ['%' . strtolower($category) . '%'])->get();
        return view('desgin.index', [
            'products' => $products,
            'currentCategory' => $category
        ]);
    }
}
