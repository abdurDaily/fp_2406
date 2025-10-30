<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Profile\ProfileController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//* BACKEND 
Route::middleware('auth')->name('dashboard.')->prefix('/dashboard')->group(function () {

    //*PROFILE
    Route::get('/profile-update', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile-update', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/password-update', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    Route::post('/image-update', [ProfileController::class, 'imageUpdate'])->name('image.update');


    //*CATEGORY
    Route::get('/category-index', [CategoryController::class, 'categoryIndex'])->name('category.index');
    Route::post('/category-index', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/category-show', [CategoryController::class, 'categoryShow'])->name('category.show');
    Route::get('/category-edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::put('/category-update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::get('/category-delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');



    //*PRODUCT
    Route::get('/product-index', [ProductController::class, 'productIndex'])->name('product.index');
    Route::post('/product-create', [ProductController::class, 'productCreate'])->name('product.create');
    Route::get('/product-show', [ProductController::class, 'productShow'])->name('product.show');
    Route::get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
    Route::put('/product-update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
    Route::get('/product-delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
    Route::get('/product-image', [ProductController::class, 'productImage'])->name('product.image');
    Route::post('/product-image', [ProductController::class, 'productImagesStore'])->name('product.image.store');
    Route::get('/product-image-show', [ProductController::class, 'productImageShow'])->name('product.image.show');
    Route::get('/product-image-edit/{id}', [ProductController::class, 'productImageEdit'])->name('product.image.edit');
    Route::get('/product-image-delete/{id}', [ProductController::class, 'productImageDelete'])->name('product.image.delete');
    Route::put('/product-image-update/{id}', [ProductController::class, 'productImageUpdate'])->name('product.image.update');
});

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addto.cart');
Route::get('/cart-delete/{id}', [ProductController::class, 'cartDelete'])->name('delete.cart');
Route::get('/checkout-form', [ProductController::class, 'checkoutForm'])->name('checkout.form');


// * FRONTEND 

Route::name('frontend.')->group(function(){
   Route::get('/', [FrontendController::class,'index'])->name('index');
});

require __DIR__ . '/auth.php';
