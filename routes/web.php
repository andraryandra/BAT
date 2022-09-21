<?php

use App\Http\Controllers\master\AuthController;
use App\Http\Controllers\master\CreateUsersController;
use App\Http\Controllers\master\CustomerRouteController;
use App\Http\Controllers\master\CustomerTeritoryController;
use App\Http\Controllers\master\DashboardController;
use App\Http\Controllers\master\NewCustomerController;
use App\Http\Controllers\master\ProductController;
use App\Http\Controllers\master\RouteAssignDateController;
use App\Http\Controllers\master\RouteAssignOutletController;
use App\Http\Controllers\master\RouteBulkAssignmentController;
use App\Http\Controllers\master\RouteBulkSchedulingController;
use App\Http\Controllers\master\RouteSetupController;
use App\Http\Controllers\master\RouteTeritoryController;
use App\Http\Controllers\master\TeritoryController;
use App\Http\Controllers\master\UsersRoleController;
use App\Imports\RouteSetupImport;
use App\Imports\UsersRoleImport;
use App\Models\RouteAssignDate;
use App\Models\RouteAssignOutlet;
use App\Models\RouteBulkScheduling;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->group(function() {
    Route::get('login', 'index')->name('login');
    Route::post('post-login', 'postLogin')->name('login.post');

    Route::get('registration', 'registration')->name('register');
    Route::post('post-registration', 'postRegistration')->name('register.post');

    Route::get('dashboard', 'dashboard');

    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function() {
Route::prefix("master")->group(function () {

Route::resource("/", DashboardController::class);

Route::resource('users/role', UsersRoleController::class);
Route::post('/importUsersRole', [UsersRoleController::class, 'import'])->name('users-role.importUsersRole');

Route::resource('users', CreateUsersController::class);
Route::post('/importUsersImport', [CreateUsersController::class, 'import'])->name('create-user.importUsers');

Route::resource('customer', NewCustomerController::class);
Route::post('/importNewCustomer', [NewCustomerController::class, 'import'])->name('customer.importNewCustomer');

Route::resource('/product', ProductController::class);
Route::post('/importProduct', [ProductController::class, 'import'])->name('product.importProduct');


Route::resource("teritory", TeritoryController::class);
Route::post('/importTeritory', [TeritoryController::class, 'import'])->name('teritory.importTeritory');


Route::resource('route/setup', RouteSetupController::class);
Route::post('/importRouteSetup', [RouteSetupController::class, 'import'])->name('route.importRouteSetup');

Route::resource('route/assign-outlet', RouteAssignOutletController::class);
Route::post('/importRouteAssignOutlet', [RouteAssignOutletController::class, 'import'])->name('route.importRouteAssignOutlet');

Route::resource('route/bulk-assignment', RouteBulkAssignmentController::class);
Route::post('/importRouteBulkAssignment', [RouteBulkAssignmentController::class, 'import'])->name('route.importRouteBulkAssignment');

Route::resource('route/bulk-scheduling', RouteBulkSchedulingController::class);
Route::get('route/route-calender', [RouteBulkSchedulingController::class, 'calender']);
Route::post('/importRouteBulkScheduling', [RouteBulkSchedulingController::class, 'import'])->name('route.importRouteBulkScheduling');

Route::resource('route/assign-date', RouteAssignDateController::class);
Route::post('/importRouteAssignDate', [RouteAssignDateController::class, 'import'])->name('route.importRouteAssignDate');



Route::resource("customerTeritory", CustomerTeritoryController::class);

Route::resource("routeTeritory", RouteTeritoryController::class);

Route::resource("customerRoute", CustomerRouteController::class);

});

});
