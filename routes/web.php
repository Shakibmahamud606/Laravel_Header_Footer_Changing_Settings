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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/settings', 'SettingsController@show_page')->middleware('auth');
Route::post('/settings/update', 'SettingsController@update')->name('SettingsUpdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uchas', 'HomeController@uchas')->name('uchas');

Route::get('/admin', 'AdminController@dashboard')->name('Admin.Home')->middleware('auth');
