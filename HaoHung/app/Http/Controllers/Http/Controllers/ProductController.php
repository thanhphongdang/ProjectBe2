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
    public function store(Request $request)
    {
        $request->validate([
            'ID_Car' => 'required|exists:cars,ID_Car', // khóa ngoại phải tồn tại
            'Name_Car' => 'required|string|max:255',
            'Car_Company' => 'required|string|max:255',
            'Price' => 'required|numeric|min:0',
            'Information' => 'nullable|string',
            'Countries' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $imageName);
        }

        Product::create([
            'ID_Car' => $data['ID_Car'],
            'Name_Car' => $data['Name_Car'],
            'Car_Company' => $data['Car_Company'],
            'Price' => $data['Price'],
            'Information' => $data['Information'],
            'Image' => $imageName,
            'Countries' => $data['Countries'],
        ]);

        return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công!');
    }




    public function moveToProduct($id)
    {
        $car = warehouse::findOrFail($id);

        // Tạo bản ghi mới trong bảng products
        Product::create([
            'ID_Car' => $car->id, // lưu khóa ngoại (id kho)
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
            $car->delete(); // hoặc: $car->status = 'inactive'; $car->save();
        } else {
            $car->save();
        }

        return back()->with('success', 'Xe đã được chuyển sang danh mục bán.');

    }

    public function filterByCategory($category)
    {
        $category = urldecode($category);
        $category = trim($category);
        $products = Product::whereRaw('LOWER(car_Company) LIKE ?', ['%' . strtolower($category) . '%'])->get();
        return view('page.Index', [
            'products' => $products,
            'currentCategory' => $category
        ]);
    }

    public function updateProduct(Request $request)
    {
        $id = $request->get('id');
        $user = warehouse::find($id);
        return view('page.edit-product', ['user' => $user]);
    }


    public function postUpdateProduct(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $request->validate([
            'Name_Car' => 'required',
            'Car_Company' => 'required',
            'Countries' => 'required',
            'Price' => 'required|numeric',
            'information' => 'nullable|string',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Quantity'=> 'required|integer',
        ]);

        $product = warehouse::find($input['id']);
        // dd($product);
        // Xử lý ảnh nếu có tải lên mới
        if ($request->hasFile('Image')) {
            if ($product->Image && file_exists(public_path('image/' . $product->Image))) {
                unlink(public_path('image/' . $product->Image));
            }
             
            $imageName = time() . "_" . $input["Image"]->getClientOriginalName();
           
            $input["Image"]->move(public_path('image'), $imageName);
            $product->Image = $imageName;
            //  dd($product->Image = $imageName);
        }

        // Cập nhật các trường dữ liệu
        $product->Name_Car = $input['Name_Car'];
        $product->Quantity = $input['Quantity'];
        $product->Car_Company = $input['Car_Company'];
        $product->Countries = $input['Countries'];
        $product->Price = $input['Price'];
        $product->information = $input['information'] ?? null;
        //  dd($product);exit();
        $product->save();
        // dd('thanh cong');
        return redirect("list-product")->withSuccess('Sản phẩm đã được cập nhật thành công.');
    }

    public function deleteProduct(Request $request,$id)
    {
        // dd("Minh Hieu");
        // $id = $request->get('id');
        $user = warehouse::destroy($id);

        return redirect("list-product")->withSuccess('You have signed-in');
    }
    
    
}
