<?php

namespace App\Http\Controllers\master;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users['users'] = User::get();
        $users_count['users_count'] = User::count();

        return view("admin.master.dashboard.index", $users, $users_count);
    }
}
