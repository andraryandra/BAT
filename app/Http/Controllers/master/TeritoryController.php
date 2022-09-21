<?php

namespace App\Http\Controllers\master;

use App\Models\Teritory;
use App\Imports\TeritoryImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Request;


class TeritoryController extends Controller
{
    public function index()
    {
        $teritory['teritorys'] = Teritory::get();
        return view("admin.master.teritory.index", $teritory);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new TeritoryImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
