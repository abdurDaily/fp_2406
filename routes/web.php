<?php


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
Route::middleware('auth')->name('dashboard.')->prefix('/dashboard')->group(function(){

    //*PROFILE
    Route::get('/profile-update', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile-update', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/password-update', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    Route::post('/image-update', [ProfileController::class, 'imageUpdate'])->name('image.update');


});


// * FRONTEND 

require __DIR__.'/auth.php';
