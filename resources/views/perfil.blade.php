@extends('default')

@section('section')

  <main class="mainProfile">
    <div class="myProfile">
      <h1>Mi Perfil</h1>
      <div class="imagenAvatar">
        <img src= "<?php /* echo $usuario['avatar']*/ ?>" alt="">
      </div>
    </div>
    <div class="userInfo">
      <div class="userName">
        <h2>Nombre: </h2>
        <p><?php /* echo $usuario["nombredeusuario"] */ ?></p>
      </div>
      <div class="direccionActual">
        <h2>Mi dirección actual: </h2>
        <p><?php /* echo 'Av. Alem 352'*/ ?></p>
      </div>
      <div class="direcciones">
        <h2>Mis direcciones: </h2>
        <ul>
          <li><?php /* echo 'Av.Santa Fe 33333' */ ?></li>
          <li><?php /* echo 'San Martín 100' */ ?></li>
          <li><?php /* echo 'Av. Córdoba 500' */ ?></li>
        </ul>
      </div>
      <div class="misUltimosPedidos">
        <h2>Últimos pedidos realizados: </h2>
        <ul>
          <li><?php /* echo '12 alfajores de chocolate' */ ?></li>
          <li><?php /* echo '12 alfajores maizena' */ ?></li>
          <li><?php /* echo '5 empanadas de carne'*/ ?></li>
        </ul>
      </div>
      <div class="pedidosEnCurso">
        <h2>Pedidos en curso: </h2>
          <ul>
            <li><?php /* echo '3 pizzas napolitanas'*/ ?></li>
          </ul>
      </div>
    </div>

  </main>

@endsection
