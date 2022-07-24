<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Datechecker;
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
Route::post('/quotation/payment/{id}', [orderController::class, 'store']);
Route::post('/message-send',[contactController::class,'sendMessage']);


Route::middleware(['auth', 'userAccess:user'])->group(function () {
    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
    Route::get('/update/{id}',[App\Http\Controllers\HomeController::class, 'updateUser']);
    Route::post('/update/{id}',[App\Http\Controllers\HomeController::class, 'update']);
    Route::get('/wallet/{id}', [App\Http\Controllers\HomeController::class, 'getwallet']);
    Route::get('/booking/{id}', [App\Http\Controllers\HomeController::class, 'getBooking']);
    Route::post('/quotation/{id}', [App\Http\Livewire\Datechecker::class, 'submit']);
    Route::post('/quotation/payment/{id}', [App\Http\Controllers\orderController::class, 'store']);
    Route::post('/wallet/{id}',[App\Http\Controllers\HomeController::class,'updateWallet']);
    Route::post('/booking/{id}', [App\Http\Controllers\HomeController::class, 'updateBooking']);

});

Route::middleware(['auth', 'userAccess:admin'])->group(function () {
    Auth::routes();
    Route::post('/admin/services/{id}',[App\Http\Controllers\HomeController::class,'updateServices']);
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'getServices']);
    Route::get('/admin/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
    Route::post('/admin/update/{id}',[App\Http\Controllers\HomeController::class, 'update']);
    Route::get('/admin/update',[App\Http\Controllers\HomeController::class, 'updateAdmin']);
    Route::get('/admin/orders',[App\Http\Controllers\HomeController::class, 'getOrders']);
    Route::get('/admin/users',[App\Http\Controllers\HomeController::class, 'getUsers']);
    Route::post('/admin/users/{id}',[App\Http\Controllers\HomeController::class, 'updateUsers']);
    Route::post('/admin/users',[App\Http\Livewire\AddUser::class, 'addUser']);
    Route::get('/admin/stats',[App\Http\Controllers\HomeController::class, 'getStats']);
    Route::post('/admin/orders/{id}',[App\Http\Controllers\HomeController::class,'updateOrder']);
    Route::post('/admin/orders/complete/{id}',[App\Http\Controllers\HomeController::class,'updateOrder']);
    Route::get('/admin/mssg',[App\Http\Controllers\HomeController::class, 'mssgIndex']);
    Route::get('/fetch-messages',[App\Http\Controllers\HomeController::class, 'getMssg']);
    Route::post('/admin/delete-message/{id}',[App\Http\Controllers\HomeController::class, 'deleteMssg']);


});


Auth::routes();



