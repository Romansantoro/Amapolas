<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App;

class Views extends Controller
{
  public function showHome(){
      return view('home');
  }
  public function showSubirProducto(){
      return view('subirProducto');
  }
  public function showFaqs(){
      return view('preguntas-frecuentes');
  }
  public function showQuienes(){
      return view('quienes');
  }
  public function showCatalogo(){
      $products = Product::paginate(6);
      return view('catalogo')->with(compact('products'));
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
