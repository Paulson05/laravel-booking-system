<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomTypeController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StaffPaymentController;
use App\Http\Controllers\Admin\TestimoniesController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::resource('room', RoomController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('roomtype', RoomTypeController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('booking', BookingController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('customer', CustomerController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('department', DepartmentController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('staff', StaffController::class)->only(['index','store','show','update','destroy','edit','create']);

Route::resource('staffpayment', StaffPaymentController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('banner', BannerController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('services', ServicesController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('testimonies', TestimoniesController::class)->only(['index','store','show','update','destroy','edit','create']);


