<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //hiện thị sản phẩm
    public function index(){
        return view("desgin.admin");
    }

    //hiện thị sản phẩm
    // public function detail($Id_Products){

    //     $product = Product::findOrFail($Id_Products);
    //     return view('desgin.detail', compact('product'));
    // }

    /**
     * 
     */
    public function detail(Request $request)
    {
        $id = $request->get('id');
        $products = Product::find($id);

        return view('desgin.detail', ['products' => $products]);
    }

    /**
     * 
     */
    public function detail_Buy($id)
    {
        $product = Product::findOrFail($id); // dùng findOrFail để bắt lỗi không tìm thấy
        return view('desgin.Buy', ['product' => $product]);
    }


    /**
     * 000000000000
     * List of products
     */
    public function listProducts()
    {
        if(Auth::check()){
            $products = Product::all();
            return view('desgin.index', ['products' => $products]);
        }

        return redirect("index")->withSuccess('You are not allowed to access');
    }

    public function listProducts_detail()
    {
        if(Auth::check()){
            $products = Product::all();
            return view('desgin.detail', ['products' => $products]);
        }

        return redirect("detail")->withSuccess('You are not allowed to access');
    }


   

}
