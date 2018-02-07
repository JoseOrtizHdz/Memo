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
    return view('principal\index');
});
Route::get('index', 'Desktop\IndexController@index');
Route::get('cursos', 'Desktop\IndexController@cursos');
Route::get('quiensoy', 'Desktop\IndexController@quiensoy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
