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
Route::get('/deleteOrder/{id}',[App\Http\Controllers\HomeController::class,'deleteOrder'])->name('deleteOrders');
Route::get('/menu',[App\Http\Controllers\HomeController::class,'menu'])->name('menu');
Route::get('/deleteMenu/{id}',[App\Http\Controllers\HomeController::class,'deleteMenu'])->name('deleteMenu');
Route::get('/customerMenu',[App\Http\Controllers\HomeController::class,'customerMenu'])->name('customerMenu');
Route::get('/profile',[App\Http\Controllers\HomeController::class,'profile'])->name('profile');
Route::post('/CustomerMenuPost',[App\Http\Controllers\HomeController::class,'CustomerMenuPost'])->name('CMP');
Route::post('/orderPost',[App\Http\Controllers\HomeController::class,'orderPost'])->name('orderPost');
Route::post('/menuPost',[App\Http\Controllers\HomeController::class,'menuPost'])->name('menuPost');
Route::get('/addOrder',[App\Http\Controllers\HomeController::class,'addOrder'])->name('addOrder');
Route::post('/addOrderPost',[App\Http\Controllers\HomeController::class,'addOrderPost'])->name('addOrderPost');

Route::get('/addCustomerMenu',[App\Http\Controllers\HomeController::class,'addCustomerMenu'])->name('addCustomerMenu');
Route::post('/addOrderPost',[App\Http\Controllers\HomeController::class,'addOrderPost'])->name('addOrderPost');