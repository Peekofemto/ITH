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
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('contenido/contenido');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cedula/registrar', 'CedulaController@store');
Route::get('/cedula/listarPdf', 'CedulaController@listarPdf')->name('cedula0_pdf');




Route::post('/upload/{carpeta}',function($carpeta,Request $request){
    //error_log(json_decode($request));
    $uploadedFiles=$request->archivos;
    foreach ($uploadedFiles as $file){
        $file->store('Carpetas/'.$carpeta);
    }
    return response(['status'=>'success'],200);
});

