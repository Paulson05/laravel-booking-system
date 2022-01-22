<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomTypeController;
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



Route::get('/about',[PagesController::class, 'about'])->name('frontend.about');
Route::get('/contact-us',[PagesController::class, 'contactUs'])->name('frontend.contactus');
Route::get('/scheduler',[PagesController::class, 'scheduler'])->name('frontend.scheduler');
Route::get('/all-categories',[BlogController::class, 'all_category']);
Route::get('/postcategory/{slug}/{id}',[BlogController::class,'category']);



Route::get('/home/team',[PagesController::class, 'team'])->name('frontend.team');
Route::get('home/blog/list', [BlogController::class, 'blogList'])->name('blog.list');
Route::get('/detail/{slug}/{id}', [BlogController::class, 'detail'])->name('single.blog');
Route::get('/search', [BlogController::class, 'index'])->name('search');

Route::post('/save-comment/{slug}/{id}',[CommentsController::class,'postComment']);

Route::get('/dashboard',  [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/login',  [AdminController::class, 'getLogin'])->name('admin.get.login');
Route::post('/post/login',  [AdminController::class, 'postLogin'])->name('admin.post.login');

Route::resource('team', TeamController::class)->only(['index','store','show','update','destroy','edit','create'  ]);


Route::resource('room', RoomController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('roomtype', RoomTypeController::class)->only(['index','store','show','update','destroy','edit','create']);
Route::resource('booking', BookingController::class)->only(['index','store','show','update','destroy','edit','create']);


Route::resource('post', PostController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('users', UsersController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
Route::resource('roles', RolesController::class)->only(['index','store','show','update','destroy','edit','create'  ]);
