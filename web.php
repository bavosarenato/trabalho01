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
    
    




Route::get('/contato/{id?}', ['uses'=>'contatoController@show']);
Route::get('/estoque/{id?}', ['uses'=>'contatoController@include']);
Route::get('/cadastro/{id?}', ['uses'=>'contatoController@index']);






