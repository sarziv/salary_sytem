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
    return view('layouts.welcome');
});

Auth::routes();

//Sarunas Routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/account', 'AccountController@index')->name('account.index');

Route::get('/account/edit', 'AccountController@edit')->name('account.edit');

Route::post('/account/update', 'AccountController@update')->name('account.update');

Route::get('/message','InboxController@index')->name('inbox.index');

Route::get('/message/replay/{id}','InboxController@replay')->name('inbox.replay');

Route::get('/message/show/{id}','InboxController@show')->name('inbox.show');

Route::get('/message/block/{id}','InboxController@block')->name('inbox.block');

Route::get('/message/delete/{id}','InboxController@destroy')->name('inbox.delete');

Route::post('/message/store','InboxController@store')->name('inbox.store');

Route::get('/message/create','InboxController@create')->name('inbox.create');

