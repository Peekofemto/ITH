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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/personalizado',[
    'uses' => 'Auth\LoginController@login',
    'as' => 'login.personalizado'
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/administrador', function () {
        return view('home');
    })->name('administrador');

    Route::get('/usuario', function () {
        return view('inicio_usuario');
    })->name('usuario');
});