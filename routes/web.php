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

Route::get('/index', 'HomeController@index')->name('home');

Route::get('/poll/create', 'PollController@create');

// Route::get('/poll/{code}', 'PollController@index');

Route::post('/poll/create', 'PollController@store');

Route::get('/manage/polls', 'ManageController@index');

Route::get('/option/create/{code?}', 'OptionController@create');

Route::post('/option/create', 'OptionController@store');

Route::get('/poll/{code}', 'PollController@show');

Route::get('/poll/{code}','PollController@show')->name('show poll');

