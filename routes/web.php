<?php

Route::get('/', 'FrontEndController@ReadWelcome')->name('welcome');
Route::get('/review', 'FrontEndController@ReadReview')->name('review.read');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'administrator', 'namespace' => '\App\Http\Controllers\Administrator', 'middleware' => 'administrator'], function () {
        Route::get('/dashboard', 'AdministratorController@ReadHome')->name('dashboard');
    });

    Route::group(['namespace' => '\App\Http\Controllers\User', 'middleware' => 'user'], function () {
        Route::get('/sesipertama', 'UserController@Read')->name('sesipertama.read');
    });
});
