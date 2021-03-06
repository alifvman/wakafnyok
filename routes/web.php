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
    Route::get('TentangKami', 'HomeController@tentang_kami')->name('tentang_kami');
});

Route::group(['prefix' => 'Wakaf', 'as' => 'Wakaf.'], function () {
    Route::get('/', 'WakafController@index')->name('index');
    Route::get('/Masjid', 'WakafController@masjid')->name('masjid');
    Route::get('/Nasional', 'WakafController@nasional')->name('nasional');
    Route::post('Payment', 'WakafController@payment')->name('payment');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from siakad.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('vman.alif217@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
})->name('email');
