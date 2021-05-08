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
    return view('index');
});
Auth::routes();
Route::get('Wedding',function() {
    return view('Wedding');
});
Route::get('Parties',function() {
    return view('Parties');
});
Route::get('SpecialEves',function() {
    return view('SpecialEves');
});
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/orders',[App\Http\Controllers\HomeController::class, 'orders'])->name('orders');
Route::get('/newOrders',[App\Http\Controllers\HomeController::class,'newOrders'])->name('newOrders');
Route::get('/completedOrders',[App\Http\Controllers\HomeController::class,'completedOrders'])->name('completedOrders');