<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\Imports\RouteBulkSchedulingImport;
use App\Models\RouteBulkScheduling;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RouteBulkSchedulingController extends Controller
{

    public function index()
    {
        $route_bulk_scheduling['route_bulk_scheduling'] = RouteBulkScheduling::get();
        return view('admin.master.route.route_bulk_scheduling.index', $route_bulk_scheduling);
    }

    public function calender()
    {
        $route_bulk_scheduling_calender['calenders'] = RouteBulkScheduling::get();
        return view('admin.master.route.route_calender.index', $route_bulk_scheduling_calender);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new RouteBulkSchedulingImport(), request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
