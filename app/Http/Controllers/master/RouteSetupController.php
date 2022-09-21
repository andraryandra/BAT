<?php

namespace App\Http\Controllers\master;

use App\Models\RouteSetup;
use Illuminate\Http\Request;
use App\Imports\RouteSetupImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class RouteSetupController extends Controller
{
    public function index()
    {
        $route_setup['route_setup'] = RouteSetup::get();
        return view('admin.master.route.route_setup.index', $route_setup);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new RouteSetupImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }

}
