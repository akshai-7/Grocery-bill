<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Support\Facades\Response;
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
Route::get('productlist/{id}',[Productcontroller::class,'productlist']);

// Route::get('/productlist/{id}',function($id){
//     $prouduct = Bill::with('product')->whereId($id)->first();
//     return Response::json($prouduct);
//     // return view('/productlist' );
//     });

Route::get('delete/{id}',[ProductController::class,'delete']);
