<?php

namespace App\Http\Controllers\master;


use App\Models\NewCustomer;
use Illuminate\Http\Request;
use App\Imports\NewCustomerImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class NewCustomerController extends Controller
{
    public function index()
    {
        $new_customer['new_customer'] = NewCustomer::get();
        return view('admin.master.new_customer.index', $new_customer);
    }

    public function import(Request $request){
        // //melakukan import file
        // $importNewCustomer = new NewCustomerImport;
        // Excel::import($importNewCustomer, request()->file('file'));
        // //jika berhasil kembali ke halaman sebelumnya

        // if(!$importNewCustomer){
        //     return back()->with('success', 'success all save '.$importNewCustomer->getRowCount());
        // } else {
        //     return back()->with('error', 'Error Count '.$importNewCustomer->getRowCount());
        // }

        $importNewCustomer = new NewCustomerImport; //GET CONTROLLER
        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import($importNewCustomer, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Upload success'.$importNewCustomer->getRowCount()]);
        } else{
            return redirect()->back()->with(['error' => 'Please choose file before'.$importNewCustomer->getRowCount()]);
        }

    }
}
