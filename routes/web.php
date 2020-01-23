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
    return view('think');
});
//增加下列一行
Route::resource('cars','CarsController');
//加入下列這一行，其它行不要刪掉
Route::get('hello','Hello\DemoController@index');