<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Blog\TagController;
use App\Http\Controllers\Web\Backend\Blog\BlogController;
use App\Http\Controllers\Web\Backend\Product\PtagController;
use App\Http\Controllers\Web\Backend\Product\ProductController;
use App\Http\Controllers\Web\Backend\Product\CategoryController;
use App\Http\Controllers\Web\Backend\CMS\MediaPage\InterviewController;
use App\Http\Controllers\Web\Backend\CMS\LandingPage\LandingPageController;
use App\Http\Controllers\Web\Backend\CMS\BiographyPage\AchievementController;
use App\Http\Controllers\Web\Backend\CMS\UpcommingAlbumSliderImageController;
use App\Http\Controllers\Web\Backend\CMS\BiographyPage\BiographyPageController;
use App\Http\Controllers\Web\Backend\CMS\BiographyPage\CompositionGallaryImageController;
use App\Http\Controllers\Web\Backend\CMS\DiscographyPage\DiscographyGallaryImageController;
use App\Http\Controllers\Web\Backend\CMS\LandingPage\GallaryImageController as LandingGallaryImageController;
use App\Http\Controllers\Web\Backend\CMS\BiographyPage\GallaryImageController as BiographyGallaryImageController;
use App\Http\Controllers\Web\Backend\CMS\FeatureAlbumController;

Route::middleware(['auth', 'role:admin'])->group(function () {

    //!Route for LandingPageController
    Route::controller(LandingPageController::class)->group(function () {
        Route::get('/cms/landing-page/banner', 'banner')->name('cms.landing-page.banner');
        Route::patch('/cms/landing-page/banner', 'bannerContentImage')->name('cms.landing-page.banner.update');
        Route::get('/cms/landing-page/biography', 'biography')->name('cms.landing-page.biography');
        Route::patch('/cms/landing-page/biography', 'biographyContentImage')->name('cms.landing-page.biography.update');
        Route::get('/cms/landing-page/store', 'storeFeatured')->name('cms.landing-page.store');
        Route::patch('/cms/landing-page/store', 'storeFeaturedContentImage')->name('cms.landing-page.store.update');
        Route::get('/cms/landing-page/media', 'media')->name('cms.landing-page.media');
        Route::patch('/cms/landing-page/media', 'mediaContentImage')->name('cms.landing-page.media.update');
        // Route::get('/cms/landing-page/feature-album', 'featureAlbum')->name('cms.landing-page.feature-album');
        // Route::patch('/cms/landing-page/feature-album', 'featureAlbumContentImage')->name('cms.landing-page.feature-album.update');
        Route::get('/cms/landing-page/feature-album/header', 'featureAlbumHeader')->name('cms.landing-page.feature-album-header');
        Route::patch('/cms/landing-page/feature-album/header', 'mediaContentImage')->name('cms.landing-page.feature-album-header.update');
        Route::get('/live/interview', 'interview')->name('interview');
        Route::patch('/live/interview', 'interviewContentImage')->name('interview.update');
        Route::get('/note', 'note')->name('note');
        Route::patch('/note', 'noteContentImage')->name('note.update');
        Route::get('/cms/landing-page/biography/profile', 'biographyProfile')->name('cms.landing-page.biography.profile');
        Route::patch('/cms/landing-page/biography/profile', 'biographyProfileContentImage')->name('cms.landing-page.biography.profile.update');
        Route::delete('/cms/landing-page/', 'deleteContentImage')->name('cms.landing-page.delete.image');
    });
    
    //!Route for BiographyPageController
    Route::controller(BiographyPageController::class)->group(function () {
        Route::get('/cms/biography-page/header', 'header')->name('cms.biography-page.header');
        Route::patch('/cms/biography-page/header', 'headerContentImage')->name('cms.biography-page.header.update');
        Route::get('/cms/discography-page/header', 'discographyHeader')->name('cms.discography-page.header');
        Route::patch('/cms/discography-page/header', 'headerContentImage')->name('cms.discography-page.header.update');
        Route::get('/cms/media-page/header', 'mediaHeader')->name('cms.media-page.header');
        Route::patch('/cms/media-page/header', 'headerContentImage')->name('cms.media-page.header.update');
        Route::get('/cms/shop-page/header', 'shopHeader')->name('cms.shop-page.header');
        Route::patch('/cms/shop-page/header', 'headerContentImage')->name('cms.shop-page.header.update');
        Route::get('/cms/biography-page/biography/content', 'biographyContent')->name('cms.biography-page.content');
        Route::patch('/cms/biography-page/biography/content', 'biographyContentImage')->name('cms.biography-page.content.update');
        Route::get('/cms/biography-page/achivement-header', 'achievementHeader')->name('cms.biography-page.achievement.header');
        Route::patch('/cms/biography-page/achivement-header', 'achievementHeaderContentImage')->name('cms.biography-page.achievement.header.update');
        Route::get('/cms/discography-page/slider-header', 'discographySliderHeader')->name('cms.discography-page.slider.header');
        Route::patch('/cms/discography-page/slider-header', 'discographySliderHeaderContentImage')->name('cms.discography-page.slider.header.update');
        Route::get('/cms/biography-page/gallary-header', 'gallaryHeader')->name('cms.biography-page.gallay.header');
        Route::patch('/cms/biography-page/gallary-header', 'achievementHeaderContentImage')->name('cms.biography-page.achievement.header.update');
        Route::get('/cms/media-page/gallary-header', 'mediaGallaryHeader')->name('cms.media-page.gallay.header');
        Route::patch('/cms/media-page/gallary-header', 'achievementHeaderContentImage')->name('cms.media-page.gallary.header.update');
        Route::get('/cms/biography-page/composition-header', 'compositionHeader')->name('cms.biography-page.composition.header');
        Route::patch('/cms/biography-page/composition-header', 'achievementHeaderContentImage')->name('cms.biography-page.achievement.header.update');
        Route::delete('/cms/biography-page/', 'deleteContentImage')->name('cms.biography-page.delete.image');
    });

    //!Route for GallaryImageController for Landing page
    Route::controller(LandingGallaryImageController::class)->group(function () {
        Route::get('/gallary-image', 'index')->name('gallary-image.index');
        Route::get('/gallary-image/create', 'create')->name('gallary-image.create');
        Route::post('/gallary-image/create', 'store')->name('gallary-image.store');
        Route::delete('/gallary-image/delete/{id}', 'destroy')->name('gallary-image.delete');
    });

    //!Route for UpcommingAlbumSliderImageController for Biography page composition section
    Route::controller(UpcommingAlbumSliderImageController::class)->group(function () {
        Route::get('upcomming/slider-image', 'index')->name('upcomming.slider-image.index');
        Route::get('upcomming/slider-image/create', 'create')->name('upcomming.slider-image.create');
        Route::post('upcomming/slider-image/create', 'store')->name('upcomming.slider-image.store');
        Route::delete('upcomming/slider-image/delete/{id}', 'destroy')->name('upcomming.slider-image.delete');
    });

    //!Route for BiographyGallaryImageController for Biography page
    Route::controller(BiographyGallaryImageController::class)->group(function () {
        Route::get('biography/gallary-image', 'index')->name('biography.gallary-image.index');
        Route::get('biography/gallary-image/create', 'create')->name('biography.gallary-image.create');
        Route::post('biography/gallary-image/create', 'store')->name('biography.gallary-image.store');
        Route::delete('biography/gallary-image/delete/{id}', 'destroy')->name('biography.gallary-image.delete');
    });

    //!Route for CompositionGallaryImageController for Biography page composition section
    Route::controller(CompositionGallaryImageController::class)->group(function () {
        Route::get('biography/composition/gallary-image', 'index')->name('biography.composition.gallary-image.index');
        Route::get('biography/composition/gallary-image/create', 'create')->name('biography.composition.gallary-image.create');
        Route::post('biography/composition/gallary-image/create', 'store')->name('biography.composition.gallary-image.store');
        Route::delete('biography/composition/gallary-image/delete/{id}', 'destroy')->name('biography.composition.gallary-image.delete');
    });

    //!Route for DiscographyGallaryImageController for Biography page composition section
    Route::controller(DiscographyGallaryImageController::class)->group(function () {
        Route::get('discography/gallary-image', 'index')->name('discography.gallary-image.index');
        Route::get('discography/gallary-image/create', 'create')->name('discography.gallary-image.create');
        Route::post('discography/gallary-image/create', 'store')->name('discography.gallary-image.store');
        Route::delete('discography/gallary-image/delete/{id}', 'destroy')->name('discography.gallary-image.delete');
    });

    //!Route for AchievementController
    Route::controller(AchievementController::class)->group(function () {
        Route::get('/cms/achivement', 'index')->name('achivement.index');
        Route::get('/cms/achivement/create', 'create')->name('achivement.create');
        Route::post('/cms/achivement/create', 'store')->name('achivement.store');
        Route::delete('/cms/achivement/delete/{id}', 'destroy')->name('achivement.delete');
    });

    //!Route for FeatureAlbumController
    Route::controller(FeatureAlbumController::class)->group(function () {
        Route::get('/cms/feature-album', 'index')->name('feature-album.index');
        Route::get('/cms/feature-album/create', 'create')->name('feature-album.create');
        Route::post('/cms/feature-album/create', 'store')->name('feature-album.store');
        Route::delete('/cms/feature-album/delete/{id}', 'destroy')->name('feature-album.delete');
    });

    //!Route for InterviewController
    Route::controller(InterviewController::class)->group(function () {
        Route::get('/cms/media-page/interview', 'index')->name('cms.media-page.interview.index');
        Route::get('/cms/media-page/interview/create', 'create')->name('cms.media-page.interview.create');
        Route::post('/cms/media-page/interview/create', 'store')->name('cms.media-page.interview.store');
        Route::delete('/cms/media-page/interview/delete/{id}', 'destroy')->name('cms.media-page.interview.delete');
    });

    //!Route for CategoryController
    Route::resource('categories', CategoryController::class);

    //!Route for PtagController
    Route::resource('ptags', PtagController::class);

    //!Route for ProductController
    Route::get('/products/status/{id}',  [ProductController::class, 'status'])->name('products.status');
    Route::resource('products', ProductController::class);

    //!Route for TagController
    Route::resource('tags', TagController::class);

    //!Route for BlogController
    Route::get('/blogs/status/{id}',  [BlogController::class, 'status'])->name('blogs.status');
    Route::resource('blogs', BlogController::class);
});
