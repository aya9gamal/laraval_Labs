<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorController;
use App\Http\Controllers\ArticleController;
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
//     return view('welcome');
//     // return "hello aya";
// });
// Route::get('/',[HomeController::class,'Categories']);
// Route::get('/home',[HomeController::class,'Categories']);
// Route::get('/product_dtails/{p_id}',[HomeController::class,'Show']);
Route::get('/',[CategorController::class,'index']);
Route::get('/create', [CategorController::class, 'create'])->name('category.create');
Route::post('/cats/save', [CategorController::class, 'save'])->name('category.save');
// Route::delete('/delete/{id}', [CategorController::class, 'delete']);
Route::get('/delete_cate/{id}', [CategorController::class, 'delete']);
// Route::get('/home',[ArticleController::class,'index']);
Route::get('/cate/{id}/edit', [CategorController::class, 'edit']);
// Route::put('/cates/{id}', [CategorController::class, 'update']);
Route::post('/edit/{id}', [CategorController::class, 'update']);
Route::get('/detais_cate/{id}', [CategorController::class, 'show']);

// article routers
Route::get('/article',[ArticleController::class,'index']);
Route::get('/create_article', [ArticleController::class, 'create']);
Route::post('/article/save', [ArticleController::class, 'save']);
Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);
Route::post('/edit_article/{id}', [ArticleController::class, 'update']);
Route::get('/delete_article/{id}', [ArticleController::class, 'delete']);
Route::get('/detais_artic/{id}', [ArticleController::class, 'show']);