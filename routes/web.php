<?php

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

    /* Front */
        Route::get('/', 'FrontController@index')->name('home');
        Route::get('/about', 'FrontController@about')->name('about');
        Route::get('/login', 'FrontController@login')->name('login');
        Route::get('/privacy', 'FrontController@privacy')->name('privacy');
        Route::get('/terms-of-service', 'FrontController@tos')->name('terms_of_service');
        Route::get('/contact', 'FrontController@contact')->name('contact');
        //edit to portfolio
        Route::get('/portfolio', 'FrontController@portfolio')->name('portfolio');

    /* Front */


    /* Admin */
        Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
        {
            Route::get('/admin', 'AdminController@index')->name('adminhome');
            Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
            /*  Nav Buttons  */
            Route::get('/admin/members', 'AdminController@members');
        });

        Route::group(['middleware' => 'App\Http\Middleware\LoginMiddleware'], function() {
            Route::get('/login', 'AdminController@login')->name('login');
            Route::post('/login', 'Auth\LoginController@store');
        });

    /* Admin */
