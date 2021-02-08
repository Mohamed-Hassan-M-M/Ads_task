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

Route::group(['prefix'=>'admin'],function (){

    Route::group(["middleware"=>'auth:admin'],function (){

        /* dashboard routes */
        Route::get('/','DashboardController@index')->name('admin.dashboard');

        /* logout routes */
        Route::get('/logout','Auth\LoginController@logout')->name('admin.logout');

        /* advertisement routes */
        Route::group(['prefix'=>'ads'],function (){
            Route::get('/','AdsController@index')->name('admin.advertisement.index');
            Route::get('/create','AdsController@create')->name('admin.advertisement.create');
            Route::post('/Create','AdsController@doCreate')->name('admin.advertisement.doCreate');
        });

        /* location routes */
        Route::group(['prefix'=>'location'],function (){
            Route::get('/','LocationController@index')->name('admin.location.index');
            Route::post('/Create','LocationController@doCreate')->name('admin.location.doCreate');
        });

        /* customer routes */
        Route::get('/customer','CustomerController@index')->name('admin.customer.index');
    });
    /* login routes */
    Route::group(['namespace'=>'Auth','middleware'=>'guest:admin'],function (){
        Route::get('/login','LoginController@login')->name('admin.login');
        Route::post('/login','LoginController@doLogin')->name('admin.doLogin');
    });
});
