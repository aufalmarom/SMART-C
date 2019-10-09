<?php

Route::get('/', 'FrontEndController@index')->name('index.read');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'administrator', 'namespace' => '\App\Http\Controllers\Administrator', 'middleware' => 'administrator'], function () {
        Route::get('/dashboard', 'AdministratorController@ReadHome')->name('dashboard');
    });

    Route::group(['namespace' => '\App\Http\Controllers\Administrator', 'middleware' => 'user'], function () {
        Route::get('/sesipertama', 'AdministratorController@ReadHome')->name('home.read');
    });
});


// Route::get('/home', 'HomeController@index')->name('home');
