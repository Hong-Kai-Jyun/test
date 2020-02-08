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


//加入下列這一行，其它行不要刪掉
Route::get('/hello','Hello\DemoController@index');

Route::resource('/customer','CustomerController');

Route::resource('/cars','CarsController');

Route::resource('/mysystem','mySystemController');



Route::any('/customer','CustomerController@index');

Route::get('/cars', function () { return view('board') });

Route::any('/mysystem','mySystemController@index');
