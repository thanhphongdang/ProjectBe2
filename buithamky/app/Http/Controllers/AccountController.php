<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use \App\Models\Account;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function Sign(){
        return view("desgin.sign");
    }
    public function Login(){
        return view("desgin.login");
    }
     
    public function postLogin(Request $request){    
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->all('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('demo');
        }

        return redirect()->back();
        
    }
    public function postSign(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $data = $request->all();
        $account = Account::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        if ($account) {
            return redirect('login')->with('success', 'Account created successfully!');
        }

        return back()->with('error', 'Account creation failed');
    }
}
