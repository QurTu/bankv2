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



Auth::routes();

Route::get('/', 'AccountController@index')->name('home');
Route::get('/addAcc', 'AccountController@addAcount')->name('addAccount');
Route::post('/saveAcc', 'AccountController@saveAcc')->name('saveAcc');
Route::get('/addFunds/{account}', 'AccountController@addFunds')->name('addFunds');
Route::get('/takeFunds/{account}', 'AccountController@takeFunds')->name('takeFunds');

