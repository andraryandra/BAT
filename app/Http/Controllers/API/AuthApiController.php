<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function index()
    {
        $users_api = User::get();
        return response()->json($users_api);
    }

    // public function login(Request $req)
    // {

    //      // Validate Inputs
    //      $rules = [
    //         // 'role' => 'required',
    //         'users_users_name' => 'required',
    //         'password' => 'required|string',
    //     ];
    //     $req->validate($rules);
    //     // find user email and role in users table
    //     $user = User::where('users_users_name', $req->users_users_name);
    //     // ->where('role', $req->role)->first();
    //     // if user email found and password is correct
    //     if($user && Hash::check($user->password)){
    //         // $token = $user->createToken('Personal Access Token')->plainTextToken;
    //         // $response=['user'=> $user, 'token'=> $token];
    //         $response=['user'=> $user];
    //         return response()->json($response, 200);
    //     }
    //     $response = ['message'=>'Incorrect role or email or password'];
    //     return response()->json($response, 400);
    // }

    public function login(Request $request)
    {
        $login = Auth::Attempt($request->all());
        if ($login) {
            $user = Auth::user();
            $user->remember_token = Str::random(100);
            $user->save();
            // $user->makeVisible('api_token');

            return response()->json([
                'response_code' => 200,
                'message' => 'Login Berhasil',
                'conntent' => $user
            ]);
        }else{
            return response()->json([
                'response_code' => 404,
                'message' => 'Username atau Password Tidak Ditemukan!'
            ]);
        }
    }

    public function logout(Request $req)
    {
        $req->user()->token()->revoke();
        $response = ['message'=>'Successfully logged out'];
        return response()->json($response, 200);
    }

    public function userDetail(Request $req)
    {
        $user = auth()->user();

        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => $user
        ], 200);
    }
}
