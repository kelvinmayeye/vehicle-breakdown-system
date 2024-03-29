<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\UserController;

use App\Http\Controllers\services\ServiceController;
use App\Http\Controllers\request\RequestController;

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


//Route::get('/',[UserController::class,'getIndex'])->name('login');
Route::post('login',[UserController::class,'login']);

Route::get('register',[UserController::class,'getRegister']);
Route::post('register',[UserController::class,'register']);
// Mechanic Register
Route::get('mechanic-register',[UserController::class,'mechanicRegisterPage']);

Route::middleware("auth")->group(function(){
    Route::get('home',[UserController::class,'getDashBoard'])->name('home');
    Route::post('logout',[UserController::class,'logout']);


    Route::get('all-services',[ServiceController::class,'getAllservice']);
    Route::post('store-service',[ServiceController::class,'store']);


    Route::get('request',[RequestController::class,'getMakeRequest']);
    Route::get('request-history',[RequestController::class,'getRequestHistory']);
    Route::post('make-request',[RequestController::class,'store']);
    Route::post('cancel-request',[RequestController::class,'cancel']);
    // Mechanic Register
    Route::get('mechanics',[UserController::class,'getMechanics']);
    Route::post('activate-mechanic',[UserController::class,'activateMechanic']);
});
