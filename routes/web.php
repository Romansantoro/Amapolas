<?php

Route::get('/perfil', 'Views@showPerfil')->middleware('auth')->name('perfil');

Route::get('/subirProducto', 'Views@showSubirProducto')->middleware('auth')->name('subirProducto');
Route::post('/subirProducto', 'ProductController@create')->middleware('auth')->name('subirProductoPost');

Route::get('/subirIngrediente', 'IngredientController@index')->middleware('auth')->name('subirIngrediente');
Route::post('/subirIngrediente', 'IngredientController@create')->middleware('auth')->name('subirIngredientePost');

Route::get('/subirCategoria', 'CategoryController@index')->middleware('auth')->name('subirCategoria');
Route::post('/subirCategoria', 'CategoryController@create')->middleware('auth')->name('subirCategoriaPost');

Route::get('/cambiarContraseña', 'Views@showCambiarContraseña')->middleware('auth')->name('cambiarContraseña');

Route::get('/recuperarContraseña', 'Views@showRecuperarContraseña')->middleware('auth')->name('recuperarContraseña');

Route::get('/editarPerfil', 'Views@showEditarPerfil')->middleware('auth')->name('editarPerfil');

// Route::get('/register', 'Views@showRegistro')->name('register');
//
// Route::get('/login', 'Views@showLogin')->name('login');

Route::get('/catalogo', 'Views@showCatalogo')->name('catalogo');

Route::get('/quienes-somos', 'Views@showQuienes')->name('quienes-somos');

Route::get('/preguntas-frecuentes', 'Views@showFaqs')->name('preguntas-frecuentes');

Route::get('/', 'Views@showHome')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
