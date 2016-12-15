<?php
/**
 * Created by PhpStorm.
 * User: cristian
 * Date: 1/12/16
 * Time: 21:31
 */

Route::group([
    'middleware' => 'web'], function() {
    Route::group(['middleware' => 'auth'], function () {
        Route::resource('assesments', 'AssesmentsController');
    });
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'api',
], function() {
    //Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('assesments', 'AssesmentsController');
    });
});