<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\warehouse;
use Hash;
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
    public function postAddproduct(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request->all());

        $data = $request->all();

        $imageName = null;

        // Nếu người dùng có upload avatar (tên input trong form là "image")
        if ($request->hasFile('image')) {
            // $image = $request->file('image');
            // dd($image);
            $imageName = time() . "_" . $data["image"]->getClientOriginalName();
            $data["image"]->move(public_path('image'), $imageName);
        }

        // Tạo user
        $check = User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $imageName, // Lưu tên file vào DB
        ]);

        return redirect("user-list")->with('success', 'Add suddessfully !');
    }




    public function moveToProduct($id)
    {
        $car = warehouse::findOrFail($id);

        // Tạo bản ghi mới trong bảng products
        Product::create([
            'ID_Car' => $car->ID_Car,
            'Name_Car' => $car->Name_Car,
            'Car_Company' => $car->Car_Company,
            'Price' => $car->Price,
            'Information' => $car->information,
            'Image' => $car->Image,
            'Countries' => $car->Countries,
        ]);

        // Giảm số lượng xe trong kho
        $car->Quantity -= 1;

        if ($car->Quantity <= 0) {
            $car->delete(); // hoặc $car->status = 'inactive'; $car->save();
        } else {
            $car->save();
        }

        return back()->with('success', 'Xe đã được chuyển sang danh mục bán.');
    }

}
