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

Route::post('/contact',[contactController::class,'sendMail']);


Route::middleware(['auth', 'userAccess:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
    Route::post('/update/{id}',[App\Http\Controllers\HomeController::class, 'update']);
});

Route::middleware(['auth', 'userAccess:admin'])->group(function () {
  
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete']);
    Route::post('/admin/update/{id}',[App\Http\Controllers\HomeController::class, 'update']);
});
Auth::routes();



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


