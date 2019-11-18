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
        Route::post('/jejakdigital/delete', 'AdministratorController@DeleteJejakDigital')->name('jejakdigital.delete');
        Route::get('/mengenaliemosi', 'AdministratorController@ReadMengenaliEmosi')->name('mengenaliemosi.read');
        Route::get('/emosivirtual', 'AdministratorController@ReadEmosiVirtual')->name('emosivirtual.read');
        Route::post('/emosivirtual/update', 'AdministratorController@UpdateEmosiVirtual')->name('emosivirtual.update');
        Route::post('/emosivirtual/delete', 'AdministratorController@DeleteEmosiVirtual')->name('emosivirtual.delete');
        Route::get('/cyberbullying', 'AdministratorController@ReadCyberbullying')->name('cyberbullying.read');
        Route::get('/sumberdukungan', 'AdministratorController@ReadSumberDukungan')->name('sumberdukungan.read');
        Route::get('/kontroldirilingkaran', 'AdministratorController@ReadKontrolDiriLingkaran')->name('kontroldirilingkaran.read');
        Route::get('/kontroldirispin', 'AdministratorController@ReadKontrolDiriSpin')->name('kontroldirispin.read');
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
        Route::post('/emosivirtual/post', 'UserController@PostEmosiVirtual')->name('emosivirtual.post.user');
        Route::get('/cyberbullying', 'UserController@ReadCyberbullying')->name('cyberbullying.read.user');
        Route::post('/cyberbullying/post', 'UserController@PostCyberbullying')->name('cyberbullying.post.user');
        Route::get('/sumberdukungan', 'UserController@ReadSumberDukungan')->name('sumberdukungan.read.user');
        Route::post('/sumberdukungan/post', 'UserController@PostSumberDukungan')->name('sumberdukungan.post.user');
        Route::get('/kontroldirilingkaran', 'UserController@ReadKontrolDiriLingkaran')->name('kontroldirilingkaran.read.user');
        Route::post('/kontroldirilingkaran/post', 'UserController@PostKontrolDiriLingkaran')->name('kontroldirilingkaran.post.user');
        Route::get('/kontroldirispin', 'UserController@ReadKontrolDiriSpin')->name('kontroldirispin.read.user');
        Route::post('/kontroldirispin/post', 'UserController@PostKontrolDiriSpin')->name('kontroldirispin.post.user');
        Route::get('/pahlawansmart', 'UserController@ReadPahlawanSmart')->name('pahlawansmart.read.user');
        Route::post('/pahlawansmart/post', 'UserController@PostPahlawanSmart')->name('pahlawansmart.post.user');
    });
});
