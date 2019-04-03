<?php

// Home
Route::get('/', 'HomeController@index');

Route::get('/contacto', 'HomeController@contacto');

Route::get('/vestidos', 'HomeController@vestidos');

Route::get('/marcas', 'HomeController@marcas');

// Carrito
Route::get('/carrito', 'CarritoController@index');


// Usuario
Route::get('/login', 'UserController@index');

Route::post('/login', 'UserController@login');

Route::post('/registrarse', 'UserController@registrarse');
