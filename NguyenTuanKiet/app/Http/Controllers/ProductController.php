<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //hiện thị sản phẩm
    public function index(){
        return view("desgin.admin");
    }
}
