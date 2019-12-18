<?php

Route::get('/', 'FrontEndController@ReadLandingPage')->name('landingpage');
Route::get('/dev', 'FrontEndController@ReadDev')->name('dev');

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
        Route::post('/mengenaliemosi/delete', 'AdministratorController@DeleteMengenaliEmosi')->name('mengenaliemosi.delete');
        Route::get('/emosivirtual', 'AdministratorController@ReadEmosiVirtual')->name('emosivirtual.read');
        Route::post('/emosivirtual/update', 'AdministratorController@UpdateEmosiVirtual')->name('emosivirtual.update');
        Route::post('/emosivirtual/delete', 'AdministratorController@DeleteEmosiVirtual')->name('emosivirtual.delete');
        Route::get('/cyberbullying', 'AdministratorController@ReadCyberbullying')->name('cyberbullying.read');
        Route::post('/cyberbullying/delete', 'AdministratorController@DeleteCyberbullying')->name('cyberbullying.delete');
        Route::get('/sumberdukungan', 'AdministratorController@ReadSumberDukungan')->name('sumberdukungan.read');
        Route::post('/sumberdukungan/delete', 'AdministratorController@DeleteSumberDukungan')->name('sumberdukungan.delete');
        Route::get('/kontroldirilingkaran', 'AdministratorController@ReadKontrolDiriLingkaran')->name('kontroldirilingkaran.read');
        Route::post('/kontroldirilingkaran/delete', 'AdministratorController@DeleteKontrolDiriLingkaran')->name('kontroldirilingkaran.delete');
        Route::get('/kontroldirispin', 'AdministratorController@ReadKontrolDiriSpin')->name('kontroldirispin.read');
        Route::post('/kontroldirispin/delete', 'AdministratorController@DeleteKontrolDiriSpin')->name('kontroldirispin.delete');
        Route::get('/pahlawansmart', 'AdministratorController@ReadPahlawanSmart')->name('pahlawansmart.read');
        Route::post('/pahlawansmart/delete', 'AdministratorController@DeletePahlawanSmart')->name('pahlawansmart.delete');
        Route::get('/feedback', 'AdministratorController@ReadFeedback')->name('feedback.read');
        Route::post('/feedback/delete', 'AdministratorController@DeleteFeedback')->name('feedback.delete');
    });

    Route::group(['prefix' => 'user', 'namespace' => '\App\Http\Controllers\User', 'middleware' => 'user'], function () {
        Route::get('/map', 'UserController@ReadMap')->name('map.read');
        Route::get('/diridigital', 'UserController@ReadDiriDigital')->name('diridigital.read.user');
        Route::get('/diridigitalreward', 'UserController@RewardDiriDigital')->name('diridigital.reward.user');
        Route::post('/diridigital/post', 'UserController@PostDiriDigital')->name('diridigital.post.user');
        Route::get('/jejakdigital', 'UserController@ReadJejakDigital')->name('jejakdigital.read.user');
        Route::get('/jejakdigitalreward', 'UserController@RewardJejakDigital')->name('jejakdigital.reward.user');
        Route::post('/jejakdigital/post', 'UserController@PostJejakDigital')->name('jejakdigital.post.user');
        Route::get('/mengenaliemosi', 'UserController@ReadMengenaliEmosi')->name('mengenaliemosi.read.user');
        Route::get('/mengenaliemosireward', 'UserController@RewardMengenaliEmosi')->name('mengenaliemosi.reward.user');
        Route::post('/mengenaliemosi/post', 'UserController@PostMengenaliEmosi')->name('mengenaliemosi.post.user');
        Route::get('/emosivirtual', 'UserController@ReadEmosiVirtual')->name('emosivirtual.read.user');
        Route::get('/emosivirtualreward', 'UserController@RewardEmosiVirtual')->name('emosivirtual.reward.user');
        Route::post('/emosivirtual/post', 'UserController@PostEmosiVirtual')->name('emosivirtual.post.user');
        Route::get('/cyberbullying', 'UserController@ReadCyberbullying')->name('cyberbullying.read.user');
        Route::get('/cyberbullyingreward', 'UserController@RewardCyberbullying')->name('cyberbullying.reward.user');
        Route::post('/cyberbullying/post', 'UserController@PostCyberbullying')->name('cyberbullying.post.user');
        Route::get('/sumberdukungan', 'UserController@ReadSumberDukungan')->name('sumberdukungan.read.user');
        Route::get('/sumberdukunganreward', 'UserController@RewardSumberDukungan')->name('sumberdukungan.reward.user');
        Route::post('/sumberdukungan/post', 'UserController@PostSumberDukungan')->name('sumberdukungan.post.user');
        Route::get('/kontroldirilingkaran', 'UserController@ReadKontrolDiriLingkaran')->name('kontroldirilingkaran.read.user');
        Route::get('/kontroldirilingkaranreward', 'UserController@RewardKontrolDiriLingkaran')->name('kontroldirilingkaran.reward.user');
        Route::post('/kontroldirilingkaran/post', 'UserController@PostKontrolDiriLingkaran')->name('kontroldirilingkaran.post.user');
        Route::get('/kontroldirispin', 'UserController@ReadKontrolDiriSpin')->name('kontroldirispin.read.user');
        Route::get('/kontroldirispinreward', 'UserController@RewardKontrolDiriSpin')->name('kontroldirispin.reward.user');
        Route::post('/kontroldirispin/post', 'UserController@PostKontrolDiriSpin')->name('kontroldirispin.post.user');
        Route::get('/pahlawansmart', 'UserController@ReadPahlawanSmart')->name('pahlawansmart.read.user');
        Route::get('/pahlawansmartreward', 'UserController@RewardPahlawanSmart')->name('pahlawansmart.reward.user');
        Route::post('/pahlawansmart/post', 'UserController@PostPahlawanSmart')->name('pahlawansmart.post.user');
        Route::get('/feedback', 'UserController@ReadFeedback')->name('feedback.read.user');
        Route::post('/feedback/post', 'UserController@PostFeedback')->name('feedback.post.user');
    });
});
