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



Route::get('/home', 'CapController@index')->name('home');
Route::get('/', 'CapController@index')->name('home');
Route::get('/subscription', 'SubscriptionController@index');


Route::group(['as'=>'home.'], function(){
    Route::get('/physiotherapists/filter/state', 'CapController@applyFIlter')->name('filter-by-state');
});


Route::group(['as'=>'show-physio.'], function(){
    Route::get('view/{slug}/map-view', 'PhysiotherapistsController@mapView')->name('map-view');
    Route::get('view/{slug}/profile-view', 'PhysiotherapistsController@profileView')->name('profile-view');
});

Route::group(['as'=>'consultations.'], function (){
    Route::get('physiotherapist/{slug}/consult', 'CapController@consult')->name('consult');
    Route::get('{slug}/view/map-view', 'PhysiotherapistsController@mapView')->name('map-view');
    Route::get('{slug}/view/profile-view', 'PhysiotherapistsController@profileView')->name('profile-view');
});

Route::group(['as'=>'profiles.'], function (){
    Route::get('{user-slug}/view-profile', 'ProfileController@viewProfile')->name('view-profile');
});

Auth::routes();
