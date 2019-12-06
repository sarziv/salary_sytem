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
Route::get('/account', 'System\AccountController@index')->name('account.index');
Route::get('/account/edit', 'System\AccountController@edit')->name('account.edit');
Route::post('/account/update', 'System\AccountController@update')->name('account.update');
Route::get('/message','System\InboxController@index')->name('inbox.index');
Route::get('/message/replay/{id}','System\InboxController@replay')->name('inbox.replay');
Route::get('/message/show/{id}','System\InboxController@show')->name('inbox.show');
Route::get('/message/block/{id}','System\InboxController@block')->name('inbox.block');
Route::get('/message/delete/{id}','System\InboxController@destroy')->name('inbox.delete');
Route::post('/message/store','System\InboxController@store')->name('inbox.store');
Route::get('/message/create','System\InboxController@create')->name('inbox.create');

//User system branch
Route::get('/home', 'User\CityController@index');
Route::get('/user/schedule','User\AdditionalController@schedule')->name("additional.schedule");
Route::post('/additional/store', 'User\AdditionalController@store')->name('additional.store');
Route::get('/user/report','User\ReportController@index')->name('report.index');
Route::get('/user/report/create','User\ReportController@create')->name('report.create');
Route::get('/user/report/show/{id}','User\ReportController@show')->name('report.show');
Route::post('/user/report/store','User\ReportController@store')->name('report.store');
Route::get('/user/report/edit/{id}','User\ReportController@edit')->name('report.edit');
Route::get('/user/report/delete/{id}','User\ReportController@destroy')->name('report.destroy');
Route::post('/user/report/update','User\ReportController@update')->name('report.update');

//Admin system branch
//user manage
Route::get('/admin/user','Admin\AdminUserController@index')->name('adminUser.index');
Route::get('/admin/user/create','Admin\AdminUserController@create')->name('adminUser.create');
Route::get('/admin/user/show/{id}','Admin\AdminUserController@show')->name('adminUser.show');
Route::post('/admin/user/store','Admin\AdminUserController@store')->name('adminUser.store');
Route::get('/admin/user/edit/{id}','Admin\AdminUserController@edit')->name('adminUser.edit');
Route::get('/admin/user/delete/{id}','Admin\AdminUserController@destroy')->name('adminUser.destroy');
Route::post('/admin/user/update','Admin\AdminUserController@update')->name('adminUser.update');

//additional info
Route::get('/admin/user/additonal/{id}','Admin\AdminUserController@additionalShow')->name('adminUser.additionalShow');

//schedule manage
Route::get('/admin/schedule','Admin\AdminScheduleController@index')->name('adminSchedule.index');
Route::get('/admin/schedule/create/{id}','Admin\AdminScheduleController@create')->name('adminSchedule.create');
Route::get('/admin/schedule/show/{id}','Admin\AdminScheduleController@show')->name('adminSchedule.show');
Route::post('/admin/schedule/store','Admin\AdminScheduleController@store')->name('adminSchedule.store');
Route::get('/admin/schedule/edit/{id}','Admin\AdminScheduleController@edit')->name('adminSchedule.edit');
Route::get('/admin/schedule/delete/{id}','Admin\AdminScheduleController@destroy')->name('adminSchedule.destroy');
Route::post('/admin/schedule/update/{id}','Admin\AdminScheduleController@update')->name('adminSchedule.update');

//todo accountant
