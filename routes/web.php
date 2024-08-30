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

### Search
Route::get('/search', [SearchController::class, 'results'])->name('search.results');

Route::get('/listings/view/{listing_id}', [ListingsController::class, 'view'])->name('listings.view');

Route::middleware('auth')->group(function () {

    ### Account
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders');
    Route::get('/account/favourites', [AccountController::class, 'favourites'])->name('account.favourites');
    Route::get('/account/reward-points', [AccountController::class, 'rewardPoints'])->name('account.rewardPoints');
    Route::get('/account/coupons', [AccountController::class, 'coupons'])->name('account.coupons');
    Route::get('/account/my-reviews', [AccountController::class, 'myReviews'])->name('account.myReviews');

    Route::match(['get', 'post'], '/account/settings', [AccountController::class, 'settings'])->name('account.settings');
    Route::post('/account/settings/change-password', [AccountController::class, 'changePassword'])->name('account.change-password');
    Route::post('/account/settings/update-user-avatar', [AccountController::class, 'updateUserAvatar'])->name('account.update-user-avatar');
    Route::get('/account/privacy', [AccountController::class, 'privacy'])->name('account.privacy');
    Route::post('/account/privacy/set-visibility', [AccountController::class, 'setVisibility'])->name('account.setVisibility');

    Route::get('/my-listings', [ListingsController::class, 'myListings'])->name('listings.myListings');
    Route::match(['get', 'post'], '/listings/create', [ListingsController::class, 'create'])->name('listings.create');
    Route::match(['get', 'post'], '/listings/{listing_id}/attributes', [ListingsController::class, 'updateAttributes'])->name('listings.updateAttributes');
    Route::match(['get', 'post'], '/listings/{listing_id}/description', [ListingsController::class, 'updateDescription'])->name('listings.updateDescription');
    Route::match(['get', 'post'], '/listings/{listing_id}/images', [ListingsController::class, 'updateImages'])->name('listings.updateImages');
    Route::post('/listings/{listing_id}/publish', [ListingsController::class, 'publish'])->name('listings.publish');
    Route::match(['get', 'post'], '/listings/{id}/renew', [ListingsController::class, 'renewListing'])->name('admin.renewListing');

});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::post('/users/remove-user', [AdminController::class, 'removeUser'])->name('admin.removeUser');
    Route::post('/users/set-role', [AdminController::class, 'setRole'])->name('admin.setRole');

    Route::match(['get', 'post'], '/listings', [AdminController::class, 'listings'])->name('admin.listings');


});


require __DIR__ . '/auth.php';
