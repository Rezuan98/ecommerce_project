<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\ShowProductController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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
Route::get('/about/us',[IndexController::class,'aboutUs'])->name('about');
Route::get('/contact/us',[IndexController::class,'contactUs'])->name('contact');



// Route::get('/product/details',[ProductController::class,'ProductDetails'])->name('product.details');
// Route::get('/products',[ProductController::class,'Products'])->name('products');
// Route::get('/practice/grid',[ProductController::class,'grid'])->name('grid.practice');

// Route::get('/product/cart',[ProductController::class,'cartPage'])->name('cart');
// Route::get('/shipment/information',[ProductController::class,'shipmentInformation'])->name('shipment');

Route::get('/product/details/{id}',[ShowProductController::class,'ProductDetails'])->name('product.details');
Route::get('/products/{id}',[ShowProductController::class,'Products'])->name('products');
Route::get('/all/products/',[IndexController::class,'allProduct'])->name('all.product');
Route::get('/subcategory/products/{id}',[ShowProductController::class,'subcategoryProducts'])->name('subcategory.products');

Route::get('/product/cart',[ShowProductController::class,'cartPage'])->name('cart');
Route::get('/shipment/information',[CartController::class,'shipmentInformation'])->name('shipment');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');






    
});

require __DIR__.'/auth.php';

// routes for banner 


// Banner Routes
Route::get('banners', [BannerController::class, 'index'])->name('index.banner'); // List all banners
Route::get('banners/create', [BannerController::class, 'create'])->name('create.banner'); // Show form to create a new banner
Route::post('banners', [BannerController::class, 'store'])->name('store.banner'); // Store new banner
Route::get('banners/{banner}/edit', [BannerController::class, 'edit'])->name('edit.banner'); // Show form to edit a banner
Route::put('banners/{banner}/update', [BannerController::class, 'update'])->name('update.banner'); // Update a banner
Route::delete('banners/{banner}', [BannerController::class, 'destroy'])->name('destroy.banner'); // Delete a banner

// cart routes start
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/cart/debug', function () {
    return response()->json(session('cart'));
});

// cart routes end
// routes for backend start 
Route::get('/admin',[BackendController::class,'adminDashboard'])->name('admin');
Route::post('/store/message',[IndexController::class,'storeMessage'])->name('store.message');
// category routes

Route::get('/category/create',[CategoryController::class,'create'])->name('create.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('store.category');
Route::get('/category/list',[CategoryController::class,'index'])->name('index.category');
Route::get('/edit/category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
Route::post('/update/category/',[CategoryController::class,'update'])->name('update.category');
Route::get('/delete/category{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');

Route::post('/post/display/position/{id}',[CategoryController::class,'displayPosition'])->name('post.display.position');


// sub-category routes

// subcategory routes
Route::get('/subcategory/create',[SubCategoryController::class,'create'])->name('create.subcategory');
Route::post('/subcategory/store',[SubCategoryController::class,'store'])->name('store.subcategory');
Route::get('/subcategory/index',[SubCategoryController::class,'index'])->name('index.subcategory');
Route::get('/edit/subcategory/{id}',[SubCategoryController::class,'edit'])->name('edit.subcategory');
Route::post('/update/subcategory',[SubCategoryController::class,'update'])->name('update.subcategory');
Route::get('/delete/subcategory{id}',[SubCategoryController::class,'delete'])->name('delete.subcategory');


// brands route
Route::get('/brand/create',[BrandController::class,'create'])->name('create.brand');
Route::post('/brand/store',[BrandController::class,'store'])->name('store.brand');
Route::get('/brand/index',[BrandController::class,'index'])->name('index.brand');
Route::get('/edit/brand/{id}',[BrandController::class,'edit'])->name('edit.brand');
Route::post('/update/brand',[BrandController::class,'update'])->name('update.brand');
Route::get('/delete/brand{id}',[BrandController::class,'delete'])->name('delete.brand');



// routes for color
Route::get('/color/create',[ColorController::class,'create'])->name('create.color');
Route::post('/color/store',[ColorController::class,'store'])->name('store.color');
Route::get('/color/index',[ColorController::class,'index'])->name('index.color');
Route::get('/edit/color/{id}',[ColorController::class,'edit'])->name('edit.color');
Route::post('/update/color',[ColorController::class,'update'])->name('update.color');
Route::get('/delete/color{id}',[ColorController::class,'delete'])->name('delete.color');



// routes for size 


Route::get('/size/create',[SizeController::class,'create'])->name('create.size');
Route::post('/size/store',[SizeController::class,'store'])->name('store.size');
Route::get('/size/index',[SizeController::class,'index'])->name('index.size');
Route::get('/edit/size/{id}',[SizeController::class,'edit'])->name('edit.size');
Route::post('/update/size',[SizeController::class,'update'])->name('update.size');
Route::get('/delete/size{id}',[SizeController::class,'delete'])->name('delete.size');



// products routes
Route::get('/product/create',[ProductController::class,'create'])->name('create.product');
Route::post('/product/store',[ProductController::class,'store'])->name('store.product'); 
Route::get('/product/list',[ProductController::class,'index'])->name('index.product');
Route::get('/edit/product/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('/update/product/{id}',[ProductController::class,'update'])->name('update.product');
Route::get('/delete/product{id}',[ProductController::class,'delete'])->name('delete.product');


Route::get('/subcategory/fetch', [SubCategoryController::class, 'fetch'])->name('fetch.subcategory');



Route::get('/get-subcategories', [SubCategoryController::class, 'getSubcategories'])->name('get.subcategories');

// routes for backend end


// order routes starts here

Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');
Route::get('/order/success', [OrderController::class, 'successOrder'])->name('order.success');

Route::get('/order/show', [OrderController::class, 'showOrder'])->name('order.show');
Route::get('/shipped/orders', [OrderController::class, 'shippedOrders'])->name('shipped.orders');
Route::get('/completed/orders', [OrderController::class, 'completedOrders'])->name('completed.orders');
Route::get('/canceled/orders', [OrderController::class, 'canceledOrders'])->name('canceled.orders');
Route::get('/delete/order/{id}', [OrderController::class,'deleteOrder'])->name('delete.order');
Route::get('/order/details/{id}', [OrderController::class, 'orderDetails'])->name('order.details');


Route::post('/update/order/status/{id}', [OrderController::class, 'updateOrderStatus'])->name('update.order.status');

Route::post('/update/payment/status/{id}', [OrderController::class, 'updatePaymentStatusSingle'])->name('update.payment.status.single');






// order routes ends here

Route::get('/show/unread/message',[BackendController::class, 'showUnreadMessage'])->name('show.unread.message');
Route::delete('/delete/unread/message/{id}',[BackendController::class,'deleteUnreadMessage'])->name('delete.unread.message');
Route::delete('/delete/read/message/{id}',[BackendController::class,'deleteReadMessage'])->name('delete.read.message');
Route::get('/show/all/message',[BackendController::class,'showAllMessage'])->name('show.all.message');