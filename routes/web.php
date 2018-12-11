<?php

Route::get('/perfil', 'Views@showPerfil')->name('perfil');

Route::get('/editarProducto', 'Views@showEditarProducto')->name('editarProducto');
Route::post('/editarProducto', 'ProductController@create')->name('crearProducto');

Route::get('/cambiarContraseña', 'Views@showCambiarContraseña')->name('cambiarContraseña');

Route::get('/recuperarContraseña', 'Views@showRecuperarContraseña')->name('recuperarContraseña');

Route::get('/editarPerfil', 'Views@showEditarPerfil')->name('editarPerfil');

// Route::get('/register', 'Views@showRegistro')->name('register');
//
// Route::get('/login', 'Views@showLogin')->name('login');

Route::get('/catalogo', 'Views@showCatalogo')->name('catalogo');

Route::get('/quienes-somos', 'Views@showQuienes')->name('quienes-somos');

Route::get('/preguntas-frecuentes', 'Views@showFaqs')->name('preguntas-frecuentes');

Route::get('/', 'Views@showHome')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
