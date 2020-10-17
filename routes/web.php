<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@home')->name('index');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/services', 'MainController@services')->name('services');
Route::get('/staff', 'MainController@staff')->name('staff');
Route::get('/our-works', 'MainController@works')->name('works');
Route::get('/contacts', 'MainController@contacts')->name('contacts');

Route::middleware('auth')
    ->prefix('admin/')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function () {

        Route::prefix('/gallery')->name('gallery.')->group(function () {
            Route::get('/', 'GalleryController@index')->name('index');
            Route::get('/{gallery}/edit', 'GalleryController@edit')->name('edit');
            Route::put('/{gallery}/update', 'GalleryController@update')->name('update');
            Route::post('/delete-image', 'GalleryController@deleteImage')->name('delete');
        });




        Route::prefix('/content')->name('content.')->group(function () {
            Route::get('/{page}/{block}', 'MainController@index')->name('index');
            Route::put('/{content}/update/', 'MainController@updateHeader')->name('update');
        });



        Route::prefix('/staff')->name('staff.')->group(function () {
            Route::get('/', 'StaffController@index')->name('index');
            Route::get('/create', 'StaffController@create')->name('create');
            Route::post('/', 'StaffController@store')->name('index');
            Route::get('/{staff}/edit', 'StaffController@edit')->name('edit');
            Route::put('/{staff}', 'StaffController@update')->name('update');
            Route::get('/{staff}/delete', 'StaffController@destroy')->name('delete');
        });


        Route::prefix('/contact')->name('contact.')->group(function () {
            Route::get('/', 'ContactController@index')->name('index');
            Route::get('/{contact}/delete', 'ContactController@delete')->name('delete');
            Route::get('/create', 'ContactController@create')->name('create');
            Route::post('/', 'ContactController@store')->name('index');
            Route::get('/{contact}/edit', 'ContactController@edit')->name('edit');
            Route::put('/{contact}/update', 'ContactController@update')->name('update');
        });

        Route::prefix('feature/')->name('feature.')->group(function () {
            Route::prefix('work/')->name('work.')->group(function () {
                Route::get('/', 'FeatureController@work')->name('index');
                Route::get('/{feature}/delete', 'FeatureController@deleteWork')->name('delete');
                Route::get('/create', 'FeatureController@createWork')->name('create');
                Route::post('/', 'FeatureController@storeWork')->name('store');
                Route::get('/{feature}/edit', 'FeatureController@editWork')->name('edit');
                Route::put('/{feature}/update', 'FeatureController@updateWork')->name('update');
            });

            Route::prefix('tech/')->name('tech.')->group(function () {
                Route::get('/', 'FeatureController@tech')->name('index');
                Route::get('/{feature}/delete', 'FeatureController@deleteTech')->name('delete');
                Route::get('/create', 'FeatureController@createTech')->name('create');
                Route::post('/', 'FeatureController@storeTech')->name('store');
                Route::get('/{feature}/edit', 'FeatureController@editTech')->name('edit');
                Route::put('/{feature}/update', 'FeatureController@updateTech')->name('update');
            });

            Route::prefix('home/')->name('home.')->group(function () {
                Route::get('/', 'FeatureController@Home')->name('index');
                Route::get('/{feature}/delete', 'FeatureController@home')->name('delete');
                Route::get('/create', 'FeatureController@createHome')->name('create');
                Route::post('/', 'FeatureController@storeHome')->name('store');
                Route::get('/{feature}/edit', 'FeatureController@editHome')->name('edit');
                Route::put('/{feature}/update', 'FeatureController@updateHome')->name('update');
            });


            Route::prefix('service/')->name('service.')->group(function () {
                Route::get('/', 'FeatureController@service')->name('index');
                Route::get('/{feature}/delete', 'FeatureController@deleteService')->name('delete');
                Route::get('/create', 'FeatureController@createService')->name('create');
                Route::post('/', 'FeatureController@storeService')->name('store');
                Route::get('/{feature}/edit', 'FeatureController@editService')->name('edit');
                Route::put('/{feature}/update', 'FeatureController@updateService')->name('update');
            });



        });
    });
