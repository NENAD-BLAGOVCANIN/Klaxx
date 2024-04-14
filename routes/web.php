<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListingsController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{category_id}', [CategoryController::class, 'show'])->name('category.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/my-listings', [ListingsController::class, 'myListings'])->name('listings.myListings');
    Route::match(['get', 'post'], '/listings/create', [ListingsController::class, 'create'])->name('listings.create');
    Route::match(['get', 'post'], '/listings/{listing_id}/description', [ListingsController::class, 'updateDescription'])->name('listings.updateDescription');
    Route::match(['get', 'post'], '/listings/{listing_id}/images', [ListingsController::class, 'updateImages'])->name('listings.updateImages');
    Route::post('/listings/{listing_id}/publish', [ListingsController::class, 'publish'])->name('listings.publish');

});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


require __DIR__ . '/auth.php';
