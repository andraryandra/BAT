<?php

namespace App\Http\Controllers\master;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RouteBulkSchedulingImport;

class ProductController extends Controller
{

    public function index()
    {
        $products['products'] = Product::get();
        return view('admin.master.product.index',$products);
    }

    public function import(Request $request){
        //melakukan import file
        Excel::import(new ProductImport(), request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
