<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\Imports\RouteBulkAssignmetImport;
use App\Models\RouteBulkAssignment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RouteBulkAssignmentController extends Controller
{

    public function index()
    {
        $route_bulk_assignment['route_bulk_assignment'] = RouteBulkAssignment::get();
        return view('admin.master.route.route_bulk_assignment.index', $route_bulk_assignment);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new RouteBulkAssignmetImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
