<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

Route::get('/home-loginpage', function () {
    return view('login');
});
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/');
});

Route::post('/login',[LoginController::class,'myfunction']);
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'productdetailFunc']);
Route::get('search',[ProductController::class,'search']);
Route::post('add_to_cart',[ProductController::class,'addTocart']);
Route::get('/cart_list',[ProductController::class,'cart_list']);
Route::get('removeitem/{id}',[ProductController::class,'RemoveItem']);
Route::get('order',[ProductController::class,'ordernow']);
Route::post('orderPlace',[ProductController::class,'order_place']);
Route::get('orders',[ProductController::class,'orders_detail']);









