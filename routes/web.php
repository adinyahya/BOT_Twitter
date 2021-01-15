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
    return view('home');
});

Route::get('halo', function(){
    return 'Hello world! Halo semuanya, selamat belajar Laravel.';
});
Route::get('gambar', function () {
    return view('gambar');
});
Route::get('video', function () {
    return view('video');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('terms', function () {
    return view('terms');
});
Route::get('policy', function () {
    return view('policy');
});
Route::get('about', function () {
    return view('about');
});
Route::get('jodoh', function () {
    return view('jodoh');
});
Route::post('response-image', 'GambarController@ajaxRequest');

Route::post('unduh', 'VideoController@unduhvideo');

Route::post('jodoh', 'JodohController@ramal');

