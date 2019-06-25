<?php

// Home
Route::get('/', 'HomeController@index');
Route::get('/contacto', 'HomeController@contacto');

// Diseño
Route::get('/vestidos', 'DisenoController@vestidos');
Route::get('/camisetas', 'DisenoController@camisetas');
Route::get('/upload', 'DisenoController@subirFoto');

// Marcas
Route::get('/kid', 'MarcasController@zonaKid');
Route::get('/gym', 'MarcasController@zonaGym');
Route::get('/army', 'MarcasController@zonaArmy');

// Producto
Route::get('/detalle-producto', 'ProductoController@detalleProducto');

// Carrito
Route::get('/carrito', 'CarritoController@index');
Route::get('/carrito/factura', 'CarritoController@getFactura');
Route::post('/carrito/producto', 'CarritoController@addProductCart');
Route::delete('/carrito/producto', 'CarritoController@removeProductCart');
Route::post('/carrito/cupon', 'CarritoController@setCupon');
Route::post('/carrito/comprar', 'CarritoController@registrarCompra');

// Usuario
Route::get('/login', 'UserController@index');
Route::post('/login', 'UserController@login');
Route::post('/registrarse', 'UserController@registrarse');
Route::get('/logout', 'UserController@logout');
