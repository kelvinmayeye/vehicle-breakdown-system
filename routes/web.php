<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\UserController;

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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('dashboard',[UserController::class,'getDashBoard'])->name('home');


Route::get('/',[UserController::class,'getIndex']);
Route::get('register',[UserController::class,'getRegister']);

Route::post('register-customer',[UserController::class,'storeCustomer']);

