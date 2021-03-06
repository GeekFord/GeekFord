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

Route::get('/test', function () {
	return 'Hello World';
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/project-test', 'TestController@index');
Route::get('/id{id}', function ($id) {
    return 'id - ' . $id;
});
Route::get('/menu', function () {
    return 'MENU';
});
Route::get('/game', function ($id) {
    return 'Game here';
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
