<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/users', 'UsuariosController@index');
Route::get('user/{id}', 'UsuariosController@show');



