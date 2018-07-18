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




Route::get('/', 'CapController@index')->name('home');
Route::get('/home', 'CapController@index')->name('home');
Route::get('/subscription', 'SubscriptionController@index');


Route::group(['as'=>'show-physio.'], function(){
   Route::get('{slug}/view/map-view', 'PhysiotherapistsController@mapView')->name('map-view');
    Route::get('{slug}/view/profile-view', 'PhysiotherapistsController@profileView')->name('profile-view');
});

Auth::routes();