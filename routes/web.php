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

Route::domain('www.video-turfu.local')
    ->group(function(){
        Route::get('/', 'HomeController@index')
            ->name('home');

        Route::get('/video/{id}-{name}.html', 'VideoController@view')
            ->where('name', '[\w\-]+')
            ->name('viewVideo');
    });

