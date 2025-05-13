<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warehouse;
use Illuminate\Support\Facades\Auth;
use Hash;
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
            $data["Image"]->move(public_path('Image'), $imageName);
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
}
