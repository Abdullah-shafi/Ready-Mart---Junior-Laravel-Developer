<?php

use App\Location;
//Home
Route::get('/home', 'homeController@index')->name('home.index');

//Details
Route::get('/home/{id}', 'homeController@details')->name('home.details');

//login
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.index');

//middleware

Route::group(['middleware'=>['sess']], function(){
//admin
Route::get('/admin', 'homeController@admin')->name('home.admin');

//admin_unpublished
Route::get('/admin/{id}', 'homeController@admin_unpublished')->name('home.admin_unpublished');

//admin_upload_post
Route::get('/post', 'homeController@post')->name('home.post');
Route::post('/post', 'homeController@post_upload')->name('home.post');

});


//logOut

Route::get('/logout', 'logoutController@index');