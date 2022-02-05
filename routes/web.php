<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    // return view('welcome');
    // return "hello aya";
});
Route::get('/',[HomeController::class,'Categories']);
Route::get('/home',[HomeController::class,'Categories']);
Route::get('/product_dtails/{p_id}',[HomeController::class,'Show']);