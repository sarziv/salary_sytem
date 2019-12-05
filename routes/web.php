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

//Message system branch
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

//User system branch
Route::get('/home', 'CityController@index');
Route::post('/additional/store', 'AdditionalController@store')->name('additional.store');
Route::get('/user/report','ReportController@index')->name('report.index');
Route::get('/user/report/create','ReportController@create')->name('report.create');
Route::get('/user/report/show/{id}','ReportController@show')->name('report.show');
Route::post('/user/report/store','ReportController@store')->name('report.store');
Route::get('/user/report/edit/{id}','ReportController@edit')->name('report.edit');
Route::get('/user/report/delete/{id}','ReportController@destroy')->name('report.destroy');
Route::post('/user/report/update','ReportController@update')->name('report.update');
