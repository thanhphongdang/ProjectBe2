<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //hiện thị sản phẩm
    public function index(){
        return view("desgin.demo");
    }
}
