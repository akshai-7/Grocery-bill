<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


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
