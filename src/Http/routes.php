<?php
/**
 * Created by PhpStorm.
 * User: cristian
 * Date: 1/12/16
 * Time: 21:31
 */

Route::group(['middleware' => 'auth'], function () {

    Route::get('/assesments','AssesmentsController@index');

});