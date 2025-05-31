<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warehouse;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\Product;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OutOfStockNotification;

use App\Models\User;
// use App\Notifications\OutOfStockNotification;
class WarehouseController extends Controller
{
    //
    public function addInwarehouse(Request $request)
    {

        $request->validate([
            'Name_Car' => 'required|string|max:255',
            'Car_Company' => 'required|string|max:255',
            'Price' => 'required|numeric|min:0',
            'information' => 'nullable|string',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Countries' => 'required|string|max:100',
            'Quantity' => 'required|integer|min:1',
        ]);

        // dd($request->all());

        $data = $request->all();

        $imageName = null;

        // Nếu người dùng có upload avatar (tên input trong form là "image")
        if ($request->hasFile('Image')) {
            // $image = $request->file('image');
            //  dd($imageName);
            $imageName = time() . "_" . $data["Image"]->getClientOriginalName();
            $data["Image"]->move(public_path('image'), $imageName);
        }

        // Tạo user
        $check = warehouse::create([
            'Name_Car' => $data['Name_Car'],
            'Car_Company' => $data['Car_Company'],
            'Price' => $data['Price'],
            'information' => $data['information'] ?? '',
            'Image' => $imageName, // Lưu tên file vào DB
            'Countries' => $data['Countries'],
            'Quantity' => $data['Quantity'],
        ]);

        return redirect("list-product")->with('success', 'Add suddessfully !');
    }


    public function listProduct(Request $request)
    {
        $users = warehouse::all();
        $user = Auth::user(); // Lấy user hiện tại đã đăng nhập

        return view('page.list-product', [
            'users' => $users,
        ]);
    }



    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        if ($product->stock <= 0) {
            // Gửi email cho admin
            Notification::route('mail', 'kybui09@gmail.com')
                ->notify(new OutOfStockNotification($product));

            return back()->with('error', 'Sản phẩm đã hết hàng.');
        }

        // Tiếp tục xử lý đặt hàng
    }
    public function updateQuantity($id, $newQty)
    {
        $product = Product::findOrFail($id);
        $product->quantity = $newQty;
        $product->save();

        if ($newQty <= 0) {
            $admin = User::where('role', 'admin')->first();
            if ($admin) {
                $admin->notify(new OutOfStockNotification($product));
            }
        }

        return back()->with('success', 'Cập nhật số lượng thành công.');
    }

    public function showTax($id)
    {
        $product = Product::findOrFail($id);

        $tax = $product->getTax();
        $priceWithTax = $product->getPriceWithTax();

        return view('page.Tax-car', compact('product', 'tax', 'priceWithTax'));
    }

}
