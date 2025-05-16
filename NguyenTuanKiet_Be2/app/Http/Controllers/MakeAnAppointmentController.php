<?php

namespace App\Http\Controllers;

use App\Models\MakeAnAppointment;
use Illuminate\Http\Request;

class MakeAnAppointmentController extends Controller
{
    //
    // public function list()
    // {
    //     $bookings = MakeAnAppointment::all();
    //     return view('desgin.make_appointment', compact('bookings'));
    // }

    // public function create()
    // {
    //     return view('desgin.make_appointment');
    // }

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

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'Date_Book' => 'required|date',
    //         'ID_Product' => 'required|integer',
            
    //     ]);

    //     MakeAnAppointment::create([
    //         'Date_Book' => $request->Date_Book,
    //         'ID_Product' => $request->ID_Product,
    //         'ID_Customer' => Auth::id(), // ✅ Lấy từ người dùng đang đăng nhập
    //     ]);

    //     return redirect()->route('make.appointment')->with('success', 'Đã đặt lịch hẹn thành công!');
    // }

   
}
