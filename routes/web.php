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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//アクセス時にshowRegistrationForm関数が呼ばれる
Route::get('auth/register', 'Auth/RegisterController@showRegistrationForm');
//データを送信した時にregister関数が呼ばれる
Route::post('auth/register', 'Auth/RegisterController@register');