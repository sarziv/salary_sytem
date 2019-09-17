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

use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/account', 'AccountController@index')->name('account');

Route::get('/message/replay/{id}','InboxController@replay')->name('inbox.replay');

Route::get('/message/block/{id}','InboxController@block')->name('inbox.block');

Route::resource('message', 'MessageController');
