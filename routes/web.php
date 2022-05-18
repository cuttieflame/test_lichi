<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
})->name('main');
Route::get('/test',TestController::class);
Route::get('/products',[ProductController::class,'index'])->name('product.index');

Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::post('/user/create',[UserController::class,'create'])->name('user_create');

Route::get('/products/groups',[ProductController::class,'products'])->name('productgroups');

