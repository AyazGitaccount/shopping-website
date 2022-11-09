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




