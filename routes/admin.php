<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => getConfig('routes.admin.as')], function () {
    Route::group(['middleware' => 'auth:admin'], function () {
        // logout
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // dashboard
        Route::get('/', ['uses' => 'HomeController@index'])->name('home');
    });

    // login
    Route::prefix('login')->group(function () {
        Route::get('/', ['uses' => 'Auth\LoginController@showLoginForm'])->name('login');
        Route::post('/', ['uses' => 'Auth\LoginController@login'])->name('post_login');
        Route::get('two-factor', ['uses' => 'Auth\LoginController@showLoginTwoFactor'])->name('loginTwoFactor');
        Route::post('two-factor', ['uses' => 'Auth\LoginController@loginTwoFactor'])->name('postLoginTwoFactor');
    });
});

