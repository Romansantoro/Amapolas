<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Views extends Controller
{
  public function showHome(){
      return view('home');
  }
  public function showEditarProducto(){
      return view('editarProducto');
  }
  public function showFaqs(){
      return view('preguntas-frecuentes');
  }
  public function showQuienes(){
      return view('quienes');
  }
  public function showCatalogo(){
      return view('catalogo');
  }
  public function showLogin(){
      return view('login');
  }
  public function showRegistro(){
      return view('registro');
  }
  public function showPerfil(){
      return view('perfil');
  }
  public function showEditarPerfil(){
      return view('editarPerfil');
  }
  public function showRecuperarContraseña(){
      return view('recuperarContraseña');
  }
  public function showCambiarContraseña(){
      return view('cambiarContraseña');
  }
}
