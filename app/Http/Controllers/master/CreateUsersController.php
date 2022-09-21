<?php

namespace App\Http\Controllers\master;

use App\Models\User;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class CreateUsersController extends Controller
{
    public function index()
    {
        $create_user['users'] = User::get();
        return view('admin.master.users.index', $create_user);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new UserImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
