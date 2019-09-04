<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontEndController@index')->name('index.read');

Auth::routes();
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {
    Route::group(['namespace' => '\App\Http\Controllers\Administrator', 'middleware' => 'administrator'], function () {
        Route::get('/dashboard', 'AdministratorController@ReadHome')->name('home.read');
    });
});


Route::get('/home', 'HomeController@index')->name('home');
