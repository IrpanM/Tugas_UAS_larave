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

// Route::resource('/', 'HomepageController');
// Route::resource('/news', 'NewsPageController');

Route::prefix('/')
    ->namespace('Home')
    ->group(function() {
    Route::resource('/', 'HomepageController');
    // Route::resource('/news', 'NewsController');
    // Route::resource('/info', 'InfoController');

    });

Route::prefix('home')
    ->namespace('Admin')
    ->group(function() {
    Route::resource('/', 'DashboardController');
    Route::resource('/news', 'NewsController');
    Route::resource('/info', 'InfoController');
    Route::resource('/video', 'VideoController');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
