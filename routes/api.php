<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::controller(AuthApiController::class)->group(function() {
    Route::get('/auth/index', 'index');

    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');

    // put all api protected routes here
        Route::post('/auth/user-detail', 'userDetail');
        Route::post('/auth/logout', 'logout');

});

