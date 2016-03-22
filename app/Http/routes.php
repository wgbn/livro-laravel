<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/", function(){
    return "<pre>".print_r($_GET, true)."</pre>";
});

Route::get("/produtos", "ProdutoController@lista");
Route::get("/produtos/mostra", "ProdutoController@mostra");