<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::view('/','/login');
Route::post('/index',[AdminController::class,'login']);

Route::get('/index',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store']);

Route::get('/productlist',[ProductController::class,'productlist']);
Route::get('popup/{id}',[Productcontroller::class,'popup']);

Route::get('delete/{id}',[ProductController::class,'delete']);
