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

Route::get('/', 'IndexController');

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');

Route::post('/language', 'LanguageController')->name('language');

Route::resource('users', 'UserController');

Route::resource('regions', 'RegionController');

Route::resource('companies', 'MiningCompanyController');
