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

Route::get('/customerlist',[ProductController::class,'customerlist']);
Route::get('delete/{id}',[ProductController::class,'delete']);
Route::get('productlist/{id}',[Productcontroller::class,'productlist']);
Route::get('edit/{id}',[Productcontroller::class,'edit']);
Route::get('remove/{id}/{bill_id}',[ProductController::class,'remove']);
Route::post('update/{id}',[Productcontroller::class,'update']);

