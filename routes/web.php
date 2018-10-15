<?php


Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/users', 'UsuariosController@index')->name('users.index');
    Route::get('/users/new', 'UsuariosController@create')->name('users.create');
    Route::post('/users/new', 'UsuariosController@store')->name('users.store');
    Route::get('/users/{id}', 'UsuariosController@show')->name('users.show');
});



