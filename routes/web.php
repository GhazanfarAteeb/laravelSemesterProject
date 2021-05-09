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


Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::get('/profile',[HomeController::class,'profile'])->name('profile');



Route::post('/orderPost',[HomeController::class,'orderPost'])->name('orderPost');
Route::get('/addOrder',[HomeController::class,'addOrder'])->name('addOrder');
Route::post('/addOrderPost',[HomeController::class,'addOrderPost'])->name('addOrderPost');
Route::get('/orders',[HomeController::class, 'orders'])->name('orders');
Route::get('/newOrders',[HomeController::class,'newOrders'])->name('newOrders');
Route::get('/completedOrders',[HomeController::class,'completedOrders'])->name('completedOrders');
Route::get('/deleteOrder/{id}',[HomeController::class,'deleteOrder'])->name('deleteOrders');
Route::get('/updateOrders/{id}',[HomeController::class,'updateOrder'])->name('updateOrder');
Route::post('/updateOrderPost',[HomeController::class,'updateOrderPost'])->name('updateOrderPost');



Route::post('/CustomerMenuPost',[HomeController::class,'CustomerMenuPost'])->name('CMP');
Route::get('/customerMenu',[HomeController::class,'customerMenu'])->name('customerMenu');




Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/deleteMenu/{id}',[HomeController::class,'deleteMenu'])->name('deleteMenu');
Route::post('/menuPost',[HomeController::class,'menuPost'])->name('menuPost');
Route::get('/addCustomerMenu',[HomeController::class,'addCustomerMenu'])->name('addCustomerMenu');
Route::post('/addCustomerMenuPost',[HomeController::class,'addCustomerMenuPost'])->name('addCustomerMenuPost');
Route::get('/updateCustomerMenu/{id}',[HomeController::class,'updateCustomerMenu'])->name('updateCustomerMenu');
Route::post('/updateCustomerMenuPost',[HomeController::class,'updateCustomerMenuPost'])->name('updateCustomerMenuPost');