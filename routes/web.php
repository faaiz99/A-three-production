<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\customAuthController;
use App\Http\Controllers\contactController;


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
//  Route::get('/','App\Http\Controllers\listingController@index');


Route::get('/', function () { return view('index');});
Route::get('/about', function () { return view('about');});
Route::get('/gallery', function(){return view('gallery');});
Route::get('/quotation', function(){return view('quotation');});
Route::get('/contact', function(){return view('contact');});
// Route::get('/services', function(){return view('services');});
// Route::get('/sign_up', function(){return view('sign_up');});
// Route::get('/signin', function(){return view('signin');});

Route::get('/services',[serviceController::class,'index']);
Route::get('/quotation/{id}', [serviceController::class, 'payment']);
Route::post('/quotation/{id}', [orderController::class, 'store']);
Route::get('/signin', [customAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/sign_up',[customAuthController::class,'registration'])->middleware('alreadyLoggedIn');
// Route::post('/signin', [customAuthController::class, 'registerClient']);
// Route::post('/signin', [customAuthController::class, 'login']);
Route::post('/signin', [customAuthController::class,'loginClient']);
Route::get('/client',[customAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::post('/contact',[contactController::class,'sendMail']);
Route::get('/logout',[customAuthController::class, 'logout']);









