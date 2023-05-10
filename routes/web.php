<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('layouts.admin');
});

Route::get('admin/products', [ProductController::class ,'index']);
Route::get('admin/products/create', [ProductController::class ,'create']);
Route::post('admin/products/store', [ProductController::class ,'store']);
Route::get('admin/products/delete/{id}', [ProductController::class ,'delete']);
Route::get('admin/products/edit/{id}', [ProductController::class ,'edit']);
Route::patch('admin/products/update/{id}', [ProductController::class ,'update']);


Route::get('admin/categories', [CategoryController::class ,'index']);
Route::get('admin/categories/create', [CategoryController::class ,'create']);
Route::post('admin/categories/store', [CategoryController::class ,'store']);
Route::get('admin/categories/delete/{id}', [CategoryController::class ,'delete']);
Route::get('admin/categories/edit/{id}', [CategoryController::class ,'edit']);
Route::patch('admin/categories/update/{id}', [CategoryController::class ,'update']);



























// Route::get('admin/products/create', function () {
//     return view('admin.products.create');
// });
// Route::get('admin/products/delete/{id}', function () {
    
//      return redirect()->back();
// });
// Route::get('admin/products/edit/{id}', function () {

//     return view('admin.products.edit');
// });
// Route::PATCH('admin/products/update/{id}', function () {

//     return redirect()->view('admin.products.index');
// });