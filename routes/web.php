<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Profile\ProfileController;
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
});





// * FRONTEND 

require __DIR__ . '/auth.php';
