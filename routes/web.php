<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Web\Frontend\FaqController;
use App\Http\Controllers\Web\Frontend\BlogController;
use App\Http\Controllers\Web\Frontend\CartController;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\ShopController;
use App\Http\Controllers\Web\Frontend\MediaController;
use App\Http\Controllers\Web\Frontend\TermsController;
use App\Http\Controllers\Web\Frontend\ContactController;
use App\Http\Controllers\Web\Frontend\PaymentController;
use App\Http\Controllers\Web\Frontend\PrivacyController;
use App\Http\Controllers\Web\Frontend\ProductController;
use App\Http\Controllers\Web\Frontend\BiographyController;
use App\Http\Controllers\Web\Frontend\CommunityController;
use App\Http\Controllers\Web\Frontend\DiscographyController;
use App\Http\Controllers\Web\Frontend\DynamicPageController;
use App\Http\Controllers\Web\Frontend\PaymentInfoController;

//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');

//!Route for BiographyController
Route::get('/biography', [BiographyController::class, 'index'])->name('biography');

//!Route for DiscographyController
Route::get('/discography', [DiscographyController::class, 'index'])->name('discography');

//!Route for MediaController
Route::get('/media', [MediaController::class, 'index'])->name('media');

//!Route for ShopController
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('product.show');

// //!Route for CartController
// Route::get('/cart', [CartController::class, 'index'])->name('cart');

// //!Route for PaymentInfoController
// Route::get('/payment-info', [PaymentInfoController::class, 'index'])->name('payment-info');

// //!Route for PaymentController
// Route::get('/payment', [PaymentController::class, 'index'])->name('payment');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');


//!Route for ContactController
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//!Route for ContactController
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

// //!Route for PrivacyController
// Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');

// //!Route for TermsController
Route::get('/terms', [TermsController::class, 'index'])->name('terms');

//! Route for DynamicPageController
Route::get('page/{page_slug}', [DynamicPageController::class, 'index'])->name('custom.page');

//!Route for CommunityController
Route::get('/community', [CommunityController::class, 'index'])->name('community');
Route::post('/community/store', [CommunityController::class, 'store'])->name('community.store');
Route::get('/community/{slug}', [CommunityController::class, 'singlepost'])->name('community.singlepost');
Route::get('community/tags/{tagId}', [CommunityController::class, 'show'])->name('tags.show');

//!Route for FaqController
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

//!Route for ProfileController
Route::post('/update-profile', [ProfileController::class, 'UpdateProfile'])->name('update.profile');
Route::post('/update-profile-password', [ProfileController::class, 'UpdatePassword'])->name('update.Password');

Auth::routes();



