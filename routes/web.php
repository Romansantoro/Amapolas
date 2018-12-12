<?php

Route::get('/perfil', 'Views@showPerfil')->name('perfil');

Route::get('/subirProducto', 'Views@showSubirProducto')->name('subirProducto');
Route::post('/subirProducto', 'ProductController@create')->name('subirProductoPost');

Route::get('/subirIngrediente', 'IngredientController@index')->name('subirIngrediente');
Route::post('/subirIngrediente', 'IngredientController@create')->name('subirIngredientePost');

Route::get('/subirCategoria', 'CategoryController@index')->name('subirCategoria');
Route::post('/subirCategoria', 'CategoryController@create')->name('subirCategoriaPost');

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
