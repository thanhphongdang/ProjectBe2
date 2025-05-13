<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
     * User submit form login
     */
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 1) {
                return redirect()->intended('admin')
                    ->with('name', $user['name'])
                    ->with('email', $user['email'])
                    ->with('image', $user['image']);
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
     * User submit form register
     */
    public function postSign(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request->all());

        $data = $request->all();

        $imageName = null;

        // Nếu người dùng có upload avatar (tên input trong form là "image")
        if ($request->hasFile('image')) {
            // $image = $request->file('image');
            // dd($image);
            $imageName = time() . "_" . $data["image"]->getClientOriginalName();
            $data["image"]->move(public_path('image'), $imageName);
        }

        // Tạo user
        $check = User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $imageName, // Lưu tên file vào DB
        ]);

        return redirect("login")->with('success', 'Đăng ký thành công!');


    }

    /**
     * View user detail page
     */
    public function readUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('desgin.read', ['messi' => $user]);
    }

    /**
     * Delete user by id
     */
    public function deleteUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("user-list")->withSuccess('You have signed-in');
    }

    /**
     * Form update user page
     */
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('page.edit-user', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $input['id'],
            'password' => 'nullable|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find($input['id']);
        // dd($user);
        if ($request->hasFile('image')) {
            if ($user->image && file_exists(public_path('image/' . $user->image))) {
                unlink(public_path('image/' . $user->image));
            }
            $imageName = time() . "_" . $input["image"]->getClientOriginalName();
            $input["image"]->move(public_path('image'), $imageName);
            $user->image = $imageName;
        }

        $user->name = $input['name'];
        $user->address = $input['address'];
        $user->phone = $input['phone'];
        $user->email = $input['email'];

        if (!empty($input['password'])) {
            $user->password = Hash::make($input['password']);
        }

        $user->save();

        return redirect("user-list")->withSuccess('User updated successfully');
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
        if (Auth::check()) {
            $users = User::all();
            return view('desgin.admin', ['users' => $users]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Sign out
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }



    public function index()
    {
        return view("page.admin");
    }

    public function user_list(Request $request)
{
    $users = User::all();
    $user = Auth::user(); // Lấy user hiện tại đã đăng nhập

    return view('page.user-list', [
        'users' => $users,
        'name'  => $user->name,
        'email' => $user->email,
        'image' => $user->image,
    ]);
}

    public function Add()
    {
        return view('page.add-user');
    }

    public function postAdd(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request->all());

        $data = $request->all();

        $imageName = null;

        // Nếu người dùng có upload avatar (tên input trong form là "image")
        if ($request->hasFile('image')) {
            // $image = $request->file('image');
            // dd($image);
            $imageName = time() . "_" . $data["image"]->getClientOriginalName();
            $data["image"]->move(public_path('image'), $imageName);
        }

        // Tạo user
        $check = User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $imageName, // Lưu tên file vào DB
        ]);

        return redirect("user-list")->with('success', 'Add suddessfully !');
    }

    public function Profile($id)
    {

        $user = User::find($id);

        $data = [
            'user' => $user
        ];
        return view('page.profile-admin', $data);
    }

    // public function header($id) {

    //     $user = User::find($id);

    //     $data = [
    //         'user' => $user
    //     ];
    //     return view('desgin.header', $data);
    // }
}
