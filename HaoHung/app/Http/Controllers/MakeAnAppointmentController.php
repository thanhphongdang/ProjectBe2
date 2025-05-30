<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MakeAnAppointment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\makeAppoint;
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
    public function showForm()
    {
        return view('page.datlichxemxe');
    }

    public function postAdd(Request $request)
    {
        // Sử dụng Validator::make thay vì $request->validate
        $validator = Validator::make($request->all(), [
            'Name_Car' => 'required|string|max:255',
            'Name_User' => [
                'required',
                'string',
                'max:100',
                'regex:/^[a-zA-ZÀ-Ỹà-ỹ\s]+$/u'
            ],
            'Phone' => [
                'required',
                'regex:/^0\d{9}$/'
            ],
            'Email' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
            'Dealer' => 'required|string|max:255',
            'Address' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\p{L}0-9\s,.\-\/]+$/u'
            ],
        ], [
            'Name_User.required' => 'Vui lòng nhập tên !!!',
            'Name_User.regex' => 'Tên chỉ được chứa chữ cái và khoảng trắng !!!',
            'Phone.required' => 'Vui lòng nhập số điện thoại !!!',
            'Phone.regex' => 'Số điện thoại phải bắt đầu bằng 0 và đủ 10 chữ số !!!',
            'Email.required' => 'Vui lòng nhập email !!!',
            'Email.regex' => 'Email không hợp lệ. Vui lòng nhập đúng định dạng như example@gmail.com',
            'Address.required' => 'Vui lòng nhập địa chỉ !!!',
            'Address.regex' => 'Địa chỉ không hợp lệ. Vui lòng chỉ nhập chữ cái, số và các ký tự như dấu phẩy, chấm, gạch ngang.',
        ]);

        // Nếu có lỗi thì redirect về kèm session error
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Gửi lịch THẤT BẠI !!!');
        }

        // Nếu hợp lệ, lưu dữ liệu
        makeAppoint::create([
            'Name_Car' => $request->Name_Car,
            'Name_User' => $request->Name_User,
            'Phone' => $request->Phone,
            'Address' => $request->Address,
            'Email' => $request->Email,
            'Dealer' => $request->Dealer,
        ]);

        return redirect()->route('user.datlichxemxe')
            ->with('success', 'Đã gửi lịch THÀNH CÔNG. Xin hãy chờ cuộc gọi của chúng tôi để biết thời gian xem xe !!!');
    }
}
