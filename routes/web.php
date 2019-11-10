<?php

Route::get('/', 'FrontEndController@ReadLandingPage')->name('landingpage');
Route::get('/dev', 'FrontEndController@ReadDev')->name('dev');
Route::post('/feedback/post', 'FrontEndController@PostFeedback')->name('feedback.post.user');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'administrator', 'namespace' => '\App\Http\Controllers\Administrator', 'middleware' => 'administrator'], function () {
        Route::get('/dashboard', 'AdministratorController@ReadDashboard')->name('dashboard');
        Route::post('/users/create', 'AdministratorController@CreateUsers')->name('users.create');
        Route::get('/users', 'AdministratorController@ReadUsers')->name('users.read');
        Route::post('/users/delete', 'AdministratorController@DeleteUsers')->name('users.delete');
        Route::get('/diridigital', 'AdministratorController@ReadDiriDigital')->name('diridigital.read');
        Route::post('/diridigital/update', 'AdministratorController@UpdateDiriDigital')->name('diridigital.update');
        Route::post('/diridigital/delete', 'AdministratorController@DeleteDiriDigital')->name('diridigital.delete');
        Route::get('/jejakdigital', 'AdministratorController@ReadJejakDigital')->name('jejakdigital.read');
        Route::get('/mengenaliemosi', 'AdministratorController@ReadMengenaliEmosi')->name('mengenaliemosi.read');
        Route::get('/emosivirtual', 'AdministratorController@ReadEmosiVirtual')->name('emosivirtual.read');
        Route::get('/cyberbullying', 'AdministratorController@ReadCyberbullying')->name('cyberbullying.read');
        Route::get('/sumberdukungan', 'AdministratorController@ReadSumberDukungan')->name('sumberdukungan.read');
        Route::get('/kontroldiri', 'AdministratorController@ReadKontrolDiri')->name('kontroldiri.read');
        Route::get('/pahlawansmart', 'AdministratorController@ReadPahlawanSmart')->name('pahlawansmart.read');
        Route::get('/feedback', 'AdministratorController@ReadFeedback')->name('feedback.read');
        Route::post('/feedback/delete', 'AdministratorController@DeleteFeedback')->name('feedback.delete');
    });

    Route::group(['prefix' => 'user', 'namespace' => '\App\Http\Controllers\User', 'middleware' => 'user'], function () {
        Route::get('/map', 'UserController@ReadMap')->name('map.read');
        Route::get('/diridigital', 'UserController@ReadDiriDigital')->name('diridigital.read.user');
        Route::post('/diridigital/post', 'UserController@PostDiriDigital')->name('diridigital.post.user');
        Route::get('/jejakdigital', 'UserController@ReadJejakDigital')->name('jejakdigital.read.user');
        Route::post('/jejakdigital/post', 'UserController@PostJejakDigital')->name('jejakdigital.post.user');
        Route::get('/mengenaliemosi', 'UserController@ReadMengenaliEmosi')->name('mengenaliemosi.read.user');
        Route::get('/emosivirtual', 'UserController@ReadEmosiVirtual')->name('emosivirtual.read.user');
        Route::get('/cyberbullying', 'UserController@ReadCyberbullying')->name('cyberbullying.read.user');
        Route::get('/sumberdukungan', 'UserController@ReadSumberDukungan')->name('sumberdukungan.read.user');
        Route::get('/kontroldiri', 'UserController@ReadKontrolDiri')->name('kontroldiri.read.user');
        Route::get('/pahlawansmart', 'UserController@ReadPahlawanSmart')->name('pahlawansmart.read.user');
    });
});
