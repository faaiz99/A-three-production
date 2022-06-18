<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () { return view('index');});
Route::get('/about', function () { return view('about');});
Route::get('/gallery', function(){return view('gallery');});
Route::get('/quotation', function(){return view('quotation');});
Route::get('/contact', function(){return view('contact');});
Route::get('/services',[serviceController::class,'index']);
Route::get('/quotation/{id}', [serviceController::class, 'payment']);
Route::post('/quotation/{id}', [orderController::class, 'store']);
Route::post('/contact',[contactController::class,'sendMessage']);


Route::middleware(['auth', 'userAccess:user'])->group(function () {
    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
    Route::get('/update/{id}',[App\Http\Controllers\HomeController::class, 'updateUser']);
    Route::post('/update/{id}',[App\Http\Controllers\HomeController::class, 'update']);
    // Route::post('/addtask/{id}',[App\Http\Controllers\HomeController::class, 'addtask']);
    // Route::get('/gettask/{client}',[App\Http\Controllers\HomeController::class, 'gettask']);
    Route::get('/wallet/{id}', [App\Http\Controllers\HomeController::class, 'getwallet']);
    Route::get('/booking/{id}', [App\Http\Controllers\HomeController::class, 'getbooking']);

});

Route::middleware(['auth', 'userAccess:admin'])->group(function () {
    Auth::routes();
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
    Route::post('/admin/update/{id}',[App\Http\Controllers\HomeController::class, 'update']);
    Route::get('/admin/update',[App\Http\Controllers\HomeController::class, 'updateAdmin']);
    Route::get('/admin/orders',[App\Http\Controllers\HomeController::class, 'getOrders']);
    Route::get('/admin/users',[App\Http\Controllers\HomeController::class, 'getUsers']);
    Route::get('/admin/stats',[App\Http\Controllers\HomeController::class, 'getStats']);
    Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'gettaskAdmin']);

});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


