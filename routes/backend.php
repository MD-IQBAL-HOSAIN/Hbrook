<?php


use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\DynamicpageController;
use App\Http\Controllers\Web\Backend\SocialmediaController;
use App\Http\Controllers\Web\Backend\SystemSettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {

    //!Route for DashboardController
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //!Route for SystemSettingController
    Route::controller(SystemSettingController::class)->group(function () {
        Route::get('/system-setting', 'index')->name('system.setting');
        Route::post('/system-setting', 'update')->name('system.update');
        Route::get('/system/mail', 'mailSetting')->name('system.mail.index');
        Route::post('/system/mail', 'mailSettingUpdate')->name('system.mail.update');
        Route::get('/system/profile', 'profileindex')->name('profilesetting');
        Route::get('/system/stripe', 'stripeindex')->name('stripe.index');
        Route::post('/system/stripe', 'stripestore')->name('stripe.store');
    });

    //!Route for SocialmediaController
    Route::controller(SocialmediaController::class)->group(function () {
        Route::get('/system/social', 'index')->name('socialmedia.index');
        Route::post('/system/social', 'update')->name('socialmedia.update');
        Route::delete('/system/social/{id}', 'destroy')->name('socialmedia.delete');
    });

    //!Route for DynamicpageController
    Route::controller(DynamicpageController::class)->group(function () {
        Route::get('/dynamic-page', 'index')->name('dynamic_page.index');
        Route::get('/dynamic-page/create', 'dynamicPageCreate')->name('dynamic_page.create');
        Route::post('/dynamic-page/create', 'dynamicPageStore')->name('dynamic_page.store');
        Route::get('/dynamic-page/update/{id}', 'dynamicPageEdit')->name('dynamic_page.edit');
        Route::post('/dynamic-page/update/{id}', 'dynamicPageUpdate')->name('dynamic_page.update');
        Route::delete('/dynamic-page/delete/{id}', 'dynamicPageDelete')->name('dynamic_page.delete');
        Route::get('/dynamic-page/status/{id}',  'status')->name('dynamic_page.status');
    });

});
