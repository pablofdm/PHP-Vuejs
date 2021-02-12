<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/artigos', [App\Http\Controllers\Admin\ArtigosController::class, 'index'])->name('articlesHome');
    Route::resources(['/artigos' => App\Http\Controllers\Admin\ArtigosController::class]);
    //Route::post('/artigos/registro', [App\Http\Controllers\Admin\ArtigosController::class, 'store'])->name("articlesStore");
});

/*
Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){
    Route::resource('/artigos',App\Http\Controllers\Admin\ArtigosController::class)->name("artigos.store");
});
*/