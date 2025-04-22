<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class CRUDController extends Controller
{

    /**
     * Login page
     */
    public function Login()
    {
        return view('desgin.login');
    }


    
    /**
     * Login page
     */
    public function QL_User()
    {
        return view('desgin.QL_Users');
    }


     /**
     * edit
     */
    public function Edit()
    {
        return view('desgin.edit_user');
    }


     /**
     * add
     */
    public function Add()
    {
        return view('desgin.add_user');
    }

    /**
     * User submit form login
     */
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
        
            if ($user->role == 1) {
                return redirect()->intended('QL_Users')->withSuccess('Signed in as admin');
            } else {
                return redirect('demo')->withSuccess('Signed in as user');
            }
        }
        
        return redirect("login")->withSuccess('Login details are not valid');
        
    }
    /**
     * Registration page
     */
    public function Sign()
    {
        return view('desgin.sign');
    }



    /**
     * Forget Password
     */
    public function ForgetPassword()
    {
        return view('desgin.forgetPassword');
    }




    /**
     * User submit form register
     */
    public function postSign(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("login");
    }


 /**
     * Create users 
     */
    public function addUsers(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("QL_Users");
    }


    /**
     * View user detail page
     */
    public function readUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('desgin.read', ['messi' => $user]);
    }

    /**
     * Delete user by id
     */
    public function deleteUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * Form update user page
     */
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $users = User::find($user_id);

        return view('desgin.edit_user', ['users' => $users]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6',
        ]);

       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->address = $input['address'];
       $user->phone = $input['phone'];
       $user->email = $input['email'];
       $user->password = $input['password'];
       $user->save();

        return redirect("QL_Users")->withSuccess('You have signed-in');
    }
     /*
     *
     * */

    /**
     * 000000000000
     * List of users
     */
    public function listUser()
    {
        if(Auth::check()){
            $users = User::all();
            return view('desgin.admin', ['users' => $users]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Sign out
     */
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }



    
    /**
     * Submit form update user
     */
    public function postUpdatePassword(Request $request)
    {
        // Validate email phải tồn tại và password >= 6 ký tự
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ]);
    
        // Tìm người dùng qua email
        $user = User::where('email', $request->input('email'))->first();
    
        // Cập nhật mật khẩu mới đã mã hóa
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        // Redirect hoặc hiển thị thông báo thành công
        // return redirect('login')->route('login')->with('success', 'Password updated successfully. Please sign in.');
        return redirect("login")->withSuccess('Password updated successfully. Please sign in.');
    }


    //
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('desgin.QL_Users', compact('users'));
    }
    //Hiển thị danh sách
    public function User_list() {
        $users = User::all();
        return view('desgin.edit_user', ["users"=> $users]);
    }

}
