<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Sale;
class CartController extends Controller
{
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
        //    $product = Product::where('id', 1)->first();
       $cartItems = Cart::with('product')->where('ID_Customer', auth()->id())->get();
        $sales = Sale::all(); // Lấy tất cả mã giảm giá

        return view('cart.add-to-cart', compact('cartItems','sales'));


    }

    public function deleteCart($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->route('cart.view')->withErrors('Sản phẩm không tồn tại trong giỏ hàng.');
        }

        // Nếu số lượng > 1 thì giảm đi 1
        if ($cartItem->Quantity > 1) {
            $cartItem->Quantity -= 1;
            $cartItem->save();
        } else {
            // Nếu chỉ còn 1 thì xóa dòng luôn
            $cartItem->delete();
        }

        return redirect()->route('cart.view')->withSuccess('Đã cập nhật giỏ hàng.');
    }


    public function clearCart()
    {
        Cart::where('ID_Customer', auth()->id())->delete();

        return redirect()->route('cart.view')->with('success', 'Đã xoá toàn bộ giỏ hàng.');
    }







}
