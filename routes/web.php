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

Route::get('/', function () {
    return view('frontend.index');
});
Route::post('/kaydet','Controller@ayarla');



Route::group(['prefix'=>'admin'],function (){

    Route::get('/', 'AdminController@get_index');
    Route::get('/ayarlar','AdminController@get_settings');
    Route::post('/genel-ayarlar','AdminController@saveGeneral_Settings');
});



Route::get('/iletisim', function () {
    return view('frontend.contact');
});