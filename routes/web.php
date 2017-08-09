<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index');

Route::get('/home/create', 'HomeController@create');
Route::post('/home', 'HomeController@store');

Route::get('/home/{id}', 'HomeController@show');

Route::get('/home/{id}/edit', 'HomeController@edit');
Route::put('/home/{id}', 'HomeController@update');

Route::delete('/home/{id}', 'HomeController@destroy');
