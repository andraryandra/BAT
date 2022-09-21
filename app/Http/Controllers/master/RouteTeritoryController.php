<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteTeritoryController extends Controller
{
    public function index()
    {
        return view("admin.master.route_teritory.index");
    }
}
