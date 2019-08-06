<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'Roastar\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'Roastar\LaravelSSO\Controllers\ServerController@logout');
    Route::match(['get', 'post'], 'attach', 'Roastar\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'Roastar\LaravelSSO\Controllers\ServerController@userInfo');
});
