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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/upload/{carpeta}',function($carpeta,Request $request){
    //error_log(json_decode($request));
    $uploadedFiles=$request->archivos;
    foreach ($uploadedFiles as $file){
        $file->store('Carpetas/'.$carpeta);
    }
    return response(['status'=>'success'],200);
});

Route::get('/pdf', function(){
    $pdf = PDF::loadView('plantilla/pdf');
    return $pdf->download('Cedula0.pdf');

});