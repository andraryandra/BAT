<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerRouteController extends Controller
{
    public function index()
    {
        return view("admin.master.customer_route.index");
    }
}
