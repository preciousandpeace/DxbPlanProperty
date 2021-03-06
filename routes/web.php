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

Route::get('/', 'PropertyController@index')->name('property.index');

Route::get('contact', 'PropertyController@contactUs')->name('property.contactUs');

Route::get('about', 'PropertyController@aboutUs')->name('property.aboutUs');

Route::get('properties', 'PropertyController@getAllProperties')->name('property.properties');

Route::get('property/{name}', 'PropertyController@getProperty')->name('property.property');

Route::get('policy', 'PropertyController@getPrivatePolicy')->name('property.private');

Route::post('contactForm', 'ContactController@store')->name('contact.store');


Route::post('subscribe', 'SubscribeController@store')->name('subscribe.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
