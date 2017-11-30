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

/**
 * Homepage Route
 *
 */
Route::view('/','welcome')->name('home');

/**
 * Authentication Routes
 *
 */
Auth::routes();

/**
 * Home Routes
 *
 */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/**
 * Profile Routes
 *
 */
Route::get('profiles','ProfileController@index')->name('profiles');

Route::get('profile', 'ProfileController@edit')->name('edit-profile');
Route::post('profile', 'ProfileController@update')->name('update-profile');

Route::get('settings', 'ProfileController@settings')->name('edit-settings');
Route::post('settings', 'ProfileController@updateSettings')->name('update-settings');

Route::get('password', 'ProfileController@password')->name('edit-password');
Route::post('password', 'ProfileController@updatePassword')->name('update-password');

Route::get('profiles/{username}', 'ProfileController@show')->name('profile');

Route::get('token/{token}', 'ProfileController@verify')->name('token');

Route::get('deactivate', 'ProfileController@confirmDeactivation')->name('deactivate-page');
Route::post('deactivate', 'ProfileController@deactivate')->name('deactivate-profile');
