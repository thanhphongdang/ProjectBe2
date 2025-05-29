<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MakeAnAppointment;
use App\Models\Product;
use App\Models\User;

class MakeAnAppointmentController extends Controller
{
    //
     public function store(Request $request)
    {
       
        $request->validate([
            'Date_Book' => 'required|date',
            'ID_Product' => 'required|integer',
            'ID_Customer' => 'required|integer',
        ]);

        MakeAnAppointment::create($request->all());
        return redirect()->route('make.appointment')->with('success', 'Đặt lịch bảo dưỡng xe thành công!');
    }    

    public function Make_appointment()
    {
        $products = Product::all();
        $users = User::all();

        return view('page.make-appointment', compact('products', 'users'));
    }
}
