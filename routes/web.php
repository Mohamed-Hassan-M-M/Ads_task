<?php

use Illuminate\Support\Facades\Route;

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

/* website routes */
Route::get('/', 'WebsiteController@index')->name('website.home');

Route::group(['prefix'=>'user','namespace'=>'Auth'],function (){

    /* logout routes */
    Route::get('/logout','LoginController@logout')->middleware('auth:web')->name('user.logout');

    /* login register routes */
    Route::group(['middleware'=>'guest:web'],function (){
        Route::get('/login', 'LoginController@login')->name('user.login');
        Route::post('/login', 'LoginController@doLogin')->name('user.doLogin');
        Route::get('/register', 'RegisterController@register')->name('user.register');
        Route::post('/register', 'RegisterController@doRegister')->name('user.doRegister');
    });

});


