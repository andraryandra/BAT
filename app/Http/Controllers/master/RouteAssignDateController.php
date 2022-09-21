<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\Imports\RouteAssignDateImport;
use App\Models\RouteAssignDate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RouteAssignDateController extends Controller
{

    public function index()
    {
        $route_assign_date['route_assign_date'] = RouteAssignDate::get();
        return view('admin.master.route.route_assign_date.index', $route_assign_date);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new RouteAssignDateImport(), request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
