<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorController;
use App\Http\Controllers\ArticleController;

Route::get('/',[CategorController::class,'index']);
Route::get('/create', [CategorController::class, 'create'])->name('category.create');
Route::post('/cats/save', [CategorController::class, 'save'])->name('category.save');
Route::get('/delete_cate/{id}', [CategorController::class, 'delete']);
Route::get('/cate/{id}/edit', [CategorController::class, 'edit']);
Route::post('/edit/{id}', [CategorController::class, 'update']);
Route::get('/detais_cate/{id}', [CategorController::class, 'show']);

?>