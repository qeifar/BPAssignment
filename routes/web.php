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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::get('/profile', [App\Http\Controllers\UserController::class, 'edit'])->name('profiles.edit');
Route::put('/profile', [App\Http\Controllers\UserController::class, 'update'])->name('profiles.update');
Route::get('/genpwd', [App\Http\Controllers\UserController::class, 'genpwd'])->name('profiles.genpwd');
Route::get('/pizza', [App\Http\Controllers\PizzaOrderController::class, 'index'])->name('pizza.index');
Route::get('/pizza/order', 'App\Http\Controllers\PizzaOrderController@calculateBill');