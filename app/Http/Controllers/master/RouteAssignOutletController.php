<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\Imports\RouteAssignOutletImport;
use App\Models\RouteAssignOutlet;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RouteAssignOutletController extends Controller
{

    public function index()
    {
        $route_assign_outlet['route_assign_outlet'] = RouteAssignOutlet::get();
        return view('admin.master.route.route_assign_outlet.index', $route_assign_outlet);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new RouteAssignOutletImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
