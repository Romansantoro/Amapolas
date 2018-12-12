@extends('default')

@section('section')
  <?php $user = Auth::user() ?>
  <main class="mainProfile">
    <div class="myProfile">
      <h1>Mi Perfil</h1>
      <div class="imagenAvatar">
        <img src= " {{ Storage::url($user->avatar) }} " alt="">
      </div>
    </div>
    <div class="userInfo">
      <div class="userName">
        <h2>Nombre: {{ $user->name }} </h2>
        <p></p>
      </div>
      <div class="direccionActual">
        <h2>País: {{ $user->country }} <?php if ($user->province):?>{{ $user->province }}<?php endif; ?> </h2>
        <p></p>
      </div>
      <div class="direccionActual">
        <h2>Mi dirección actual: {{ $user->address }} </h2>
        <p></p>
      </div>
      <div class="direcciones">
        <h2>Mis direcciones: </h2>
        <ul>
          <li> {{ $user->address }} </li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="misUltimosPedidos">
        <h2>Últimos pedidos realizados: </h2>
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="pedidosEnCurso">
        <h2>Pedidos en curso: </h2>
          <ul>
            <li></li>
          </ul>
      </div>
    </div>

  </main>

@endsection
