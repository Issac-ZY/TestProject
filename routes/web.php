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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'WelcomeController@index');
Route::get('/getUserList','WelcomeController@show');

Route::get('/show','StudInsertController@show');
Route::get('/insert','StudInsertController@insertform');
Route::get('/edit','StudInsertController@editform');
Route::post('/create','StudInsertController@insert');
Route::post('/update','StudInsertController@update');
Route::get('/del','StudInsertController@del');


Route::get('/record_c','StudInsertController@create_record');
