<?php

Route::get('/', 'FrontEndController@ReadWelcome')->name('welcome');
Route::post('/response/post', 'FrontEndController@PostResponse')->name('response.post.user');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'administrator', 'namespace' => '\App\Http\Controllers\Administrator', 'middleware' => 'administrator'], function () {
        Route::get('/dashboard', 'AdministratorController@ReadDashboard')->name('dashboard');
        Route::get('/users', 'AdministratorController@ReadUsers')->name('users.read');
        Route::get('/sesipertama', 'AdministratorController@ReadSesiPertama')->name('sesipertama.read');
        Route::get('/sesikedua', 'AdministratorController@ReadSesiKedua')->name('sesikedua.read');
        Route::get('/sesiketiga', 'AdministratorController@ReadSesiKetiga')->name('sesiketiga.read');
        Route::get('/sesikeempat', 'AdministratorController@ReadSesiKeempat')->name('sesikeempat.read');
        Route::get('/sesikelima', 'AdministratorController@ReadSesiKelima')->name('sesikelima.read');
        Route::get('/sesikeenam', 'AdministratorController@ReadSesiKeenam')->name('sesikeenam.read');
        Route::get('/sesiketujuh', 'AdministratorController@ReadSesiKetujuh')->name('sesiketujuh.read');
        Route::get('/sesikedelapan', 'AdministratorController@ReadSesiKedelapan')->name('sesikedelapan.read');
        Route::get('/responses', 'AdministratorController@ReadResponses')->name('responses.read');
    });

    Route::group(['namespace' => '\App\Http\Controllers\User', 'middleware' => 'user'], function () {
        Route::get('/map', 'UserController@ReadMap')->name('map.read');
        Route::get('/sesipertama', 'UserController@ReadSesiPertama')->name('sesipertama.read.user');
        Route::get('/sesikedua', 'UserController@ReadSesiKedua')->name('sesikedua.read.user');
        Route::get('/sesiketiga', 'UserController@ReadSesiKetiga')->name('sesiketiga.read.user');
        Route::get('/sesikeempat', 'UserController@ReadSesiKeempat')->name('sesikeempat.read.user');
        Route::get('/sesikelima', 'UserController@ReadSesiKelima')->name('sesipertama.read.user');
        Route::get('/sesikeenam', 'UserController@ReadSesiKeenam')->name('sesikeenam.read.user');
        Route::get('/sesiketujuh', 'UserController@ReadSesiKetujuh')->name('sesiketujuh.read.user');
        Route::get('/sesikedelapan', 'UserController@ReadSesiKedelapan')->name('sesikedelapan.read.user');
    });
});
