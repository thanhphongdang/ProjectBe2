<?php

namespace App\Http\Controllers;

use App\Models\AccountAdmin;
use Illuminate\Http\Request;

class AccountAdminController extends Controller
{
    public function profileAdmin()
    {
        //
            return view('desgin.profileAdmin');
    }

    // Hiển thị thông tin của Admin
    public function displayAdmin($id)
    {

       $admin = AccountAdmin::find($id);

        $data = [
            "admin" => $admin 
        ];
        return view('desgin.profileAdmin', $data);

        
    }
}
