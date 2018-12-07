<?php

Route::get('/perfil', 'Views@showPerfil');

Route::get('/editarProducto', 'Views@showEditarProducto');

Route::get('/cambiarContraseña', 'Views@showCambiarContraseña');

Route::get('/recuperarContraseña', 'Views@showRecuperarContraseña');

Route::get('/editarPerfil', 'Views@showEditarPerfil');

Route::get('/registro', 'Views@showRegistro');

Route::get('/login', 'Views@showLogin');

Route::get('/catalogo', 'Views@showCatalogo');

Route::get('/quienes-somos', 'Views@showQuienes');

Route::get('/preguntas-frecuentes', 'Views@showFaqs');

Route::get('/', 'Views@showHome');
