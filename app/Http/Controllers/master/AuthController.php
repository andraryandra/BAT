<?php

namespace App\Http\Controllers\master;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'users_users_name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('users_users_name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/master/')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withError('Oppes! You have entered invalid Login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'users_first_name' => 'required',
            'users_last_name' => 'required',
            'users_users_name' => 'required|unique:users',
            'users_password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.master.dashboard.index');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'users_role' => $data['users_role'],
        'users_employe_id' => $data['users_employe_id'],
        'users_first_name' => $data['users_first_name'],
        'users_last_name' => $data['users_last_name'],
        'users_users_name' => $data['users_users_name'],
        'users_status' => $data['users_status'],
        'users_type' => $data['users_type'],
        'users_free_field_1' => $data['users_free_field_1'],
        'users_free_field_2' => $data['users_free_field_2'],
        'users_free_text_field_2' => $data['users_free_text_field_2'],
        'users_email' => $data['users_email'],
        'users_address' => $data['users_address'],
        'users_phone' => $data['users_phone'],
        'users_login_status' => $data['users_login_status'],
        'users_password' => Hash::make($data['users_password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login')->with(['success', 'Logout Successfully']);
    }
}
