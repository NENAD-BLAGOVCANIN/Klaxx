<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\SearchController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{category_id}', [CategoryController::class, 'show'])->name('category.show');


Route::middleware('auth')->group(function () {

    ### Account
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/settings', [AccountController::class, 'settings'])->name('account.settings');
    Route::get('/account/privacy', [AccountController::class, 'privacy'])->name('account.privacy');

    ### Search
    Route::get('/search', [SearchController::class, 'results'])->name('search.results');

    Route::get('/listings/view/{listing_id}', [ListingsController::class, 'view'])->name('listings.view');
    Route::get('/my-listings', [ListingsController::class, 'myListings'])->name('listings.myListings');
    Route::match(['get', 'post'], '/listings/create', [ListingsController::class, 'create'])->name('listings.create');
    Route::match(['get', 'post'], '/listings/{listing_id}/attributes', [ListingsController::class, 'updateAttributes'])->name('listings.updateAttributes');
    Route::match(['get', 'post'], '/listings/{listing_id}/description', [ListingsController::class, 'updateDescription'])->name('listings.updateDescription');
    Route::match(['get', 'post'], '/listings/{listing_id}/images', [ListingsController::class, 'updateImages'])->name('listings.updateImages');
    Route::post('/listings/{listing_id}/publish', [ListingsController::class, 'publish'])->name('listings.publish');

});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


require __DIR__ . '/auth.php';
