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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function() {
    Auth::routes();
    Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook');
    Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');
    Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
    Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');

    Route::get('khoa-hoc/combo/{id}-{slug}', 'PackageController@combo')->where(['id' => '[0-9]+']);
    Route::get('thanh-toan/{id}-{slug}', 'PaymentController@index')->where(['id' => '[0-9]+']);

    //Route::get('/users/{id}', 'UserController@show')->where('id','[0-9]+')->name('user.show');
    //Route::put('/users/{id}', 'UserController@update')->name('user.update');

    Route::get('tin-tuc', 'NewController@index');


    Route::get('/', 'HomeController@index')->name('home.index');

});



