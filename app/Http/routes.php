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

Route::group(['middleware' => 'web'], function() {

    Route::get("/", "ProdutoController@lista");
    Route::get("/produtos", "ProdutoController@lista");
    Route::get("/produtos/json", "ProdutoController@listaJson");
    Route::get("/produtos/mostra/{id}", "ProdutoController@mostra")->where('id', '[0-9]+');
    Route::get("/produtos/novo", "ProdutoController@novo");
    Route::post("/produtos/add", "ProdutoController@add");
    Route::get("/produtos/del/{id}", "ProdutoController@del");

    /*Route::controllers([
        'auth' => 'LoginController',
        'password' => 'Auth\PasswordController',
    ]);*/

    Route::get('/login', 'LoginController@index');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
    Route::get('/entrar', 'LoginController@index');

});
