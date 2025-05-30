<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    //
     //
    public function addToCart(Request $request)
    {
        $product = Product::where("Id_Products", $request->id)->firstOrFail();

        // Kiểm tra giỏ hàng trong DB đã có sản phẩm này chưa
        $existingCart = Cart::where('ID_Customer', auth()->id())
            ->where('ID_Product', $product->Id_Products)
            ->first();

        if ($existingCart) {
            $existingCart->Quantity += 1;
            $existingCart->Sum = $existingCart->Quantity * $product->Price;
            $existingCart->save();
        } else {
            Cart::create([
                'ID_Customer' => auth()->id(),
                'ID_Product' => $product->Id_Products,
                'Name_Car' => $product->Name_Car,
                'Quantity' => 1,
                'Sum' => $product->Price
            ]);
        }

        return redirect()->back()->with('success', 'Đã thêm vào giỏ hàng!');
    }

    public function showCart()
    {
        $cartItems = Cart::where('ID_Customer', auth()->id())->get();
        return view('cart.add-to-cart', compact('cartItems'));
    }
}
