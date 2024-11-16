<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\frontend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('/product/details',[ProductController::class,'ProductDetails'])->name('product.details');
Route::get('/products',[ProductController::class,'Products'])->name('products');
Route::get('/practice/grid',[ProductController::class,'grid'])->name('grid.practice');

Route::get('/product/cart',[ProductController::class,'cartPage'])->name('cart');
Route::get('/shipment/information',[ProductController::class,'shipmentInformation'])->name('shipment');

