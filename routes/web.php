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
    return redirect()->route('Home.index');
});

Route::group(['as' => 'Home.'], function () {
    Route::get('/', 'HomeController@index')->name('index');
});

Route::group(['prefix' => 'Wakaf', 'as' => 'Wakaf.'], function () {
    Route::get('/Masjid', 'WakafController@masjid')->name('masjid');
});
