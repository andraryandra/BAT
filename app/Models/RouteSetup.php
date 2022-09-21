<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteSetup extends Model
{
    use HasFactory;
    protected $table = "route_setup";
    protected $guarded = [];
}
