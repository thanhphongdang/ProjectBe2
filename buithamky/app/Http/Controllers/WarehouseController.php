<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warehouse;

class WarehouseController extends Controller
{
    public function nhapxe(){
        return view('admin.nhapxe');
    }

    public function showNhapXe(Request $request)
{
    $products = warehouse::all();
    // dd($products);

    $data = [
            'products'       => $products,
        ];
        // dd($data);
    return view('Function.nhapxe', $data);
}

public function addProduct(){
        return view('Function.add-product');
    }


public function postAddproduct(Request $request)
    {
        
        // dd($request->all());
         $request->validate([
            'Name_Car' => 'required|string|max:255',
            'Car_Company' => 'required|string|max:255',
            'Price' => 'required|numeric|min:0',
            'information' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Countries' => 'required|string|max:100',
            'Quantity' => 'required|integer|min:1',
        ]);

        $data = $request->all();
        

        //  $imageName = time().'.'.request()->image->getClientOriginalExtension();
         $imageName = time() . "_" . request()->image->getClientOriginalName();
          request()->image->move(public_path('images'), $imageName);

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

        // dd("Thanh cong");

        return redirect("nhapxe")->with('success', 'Add suddessfully !');
    }


    public function deleteProduct(Request $request)
    {
        $product_id = $request->get('id');
        
        $product = warehouse::destroy($product_id);
        
        return redirect("nhapxe")->withSuccess('You have signed-in');
    }


    public function updateProduct(Request $request,$id)
    {
        // $product_id = $request->get('id');
        $product = warehouse::find($id);
        // dd($product);
        $data = ['product' => $product];

        return view('Function.edit-product', $data);
    }

    /**
     * Submit form update product
     */
    public function postUpdateProduct(Request $request,$id)
    {
        // dd('cap nhat');
        $input = $request->all();
        // 
        $request->validate([
            'Name_Car' => 'required|string|max:255',
            'Car_Company' => 'required|string|max:255',
            'Price' => 'required|numeric|min:0',
            'information' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Countries' => 'required|string|max:100',
            'Quantity' => 'required|integer|min:1',
        ]);

        $product = warehouse::find($id);
        // dd($product);
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('image/' . $product->image))) {
                unlink(public_path('image/' . $product->image));
            }
            $imageName = time() . "_" . $input["image"]->getClientOriginalName();
            $input["image"]->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->Name_Car = $input['Name_Car'];
        $product->Car_Company = $input['Car_Company'];
        $product->Price = $input['Price'];
        $product->information = $input['information'];
        $product->Countries = $input['Countries'];
        $product->Quantity = $input['Quantity'];

        $product->save();
        // dd( $product->save());
        return redirect("nhapxe")->withSuccess('User updated successfully');
    }
}