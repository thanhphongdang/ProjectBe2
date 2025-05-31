<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\DetailCar;
use App\Models\warehouse;

class DetailCarController extends Controller
{
    //
     public function postAddDetails(Request $request)
    {

        $request->validate([
            'ID_Car' =>'required',
            'Engine_Type' => 'required',
            'Speed' => 'required',
            'Car_consumption' => 'required',
        ]);

        // dd($request->all());

        $data = $request->all();
        


        // Tạo user
        $check = DetailCar::create([
            'ID_Car' => $data['ID_Car'],
            'Engine_Type' => $data['Engine_Type'],
            'Speed' => $data['Speed'],
            'Car_consumption' => $data['Car_consumption'],
        ]);

        return redirect("list-product")->with('success', 'Add suddessfully !');
    }

    public function detailAdd()
    {
        $carIds = warehouse::pluck('id'); 
        return view('page.add-detail',compact('carIds'));
    }
}
