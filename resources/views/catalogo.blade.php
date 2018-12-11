@extends('default')

@section('section')

  <main class="mainCatalogo">
    <div class="contenedor-productos" >
      <h2>Filtros</h2>
      <div class="filtros" >
        <ul><br>
          <label for=""><input type="checkbox" name="" value=""> Chocolate</label> <br><br>
          <label for=""><input type="checkbox" name="" value=""> Crema pastelera </label> <br><br>
          <label for=""><input type="checkbox" name="" value=""> Ricota </label> <br><br>
          <label for=""><input type="checkbox" name="" value=""> Fruta </label> <br><br>
          <label for=""><input type="checkbox" name="" value=""> Merengue </label> <br><br>
          <label for=""><input type="checkbox" name="" value=""> Frio </label> <br><br>
        </ul>
      </div>
      <h2>Catalogo de productos</h2>
      <div class="catalogo" >

          <div class="producto">
            <div class="producto-1">
              <img src="PROYECTO/images/comida2.jpeg">
              <h4>Producto</h4>
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <p>Descripcion</p>
            </div>
          </div>
          <div class="producto">
            <div class="producto-1">
                <img src="PROYECTO/images/comida6.jpeg">
                <h4>Producto</h4>
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <p>Descripcion</p>
            </div>
          </div>
          <div class="producto">
            <div class="producto-1">
                <img src="PROYECTO/images/comida7.png">
                <h4>Producto</h4>
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <p>Descripcion</p>
            </div>
          </div>
          <div class="producto">
            <div class="producto-1">
                <img src="PROYECTO/images/comida3.png">
                <h4>Producto</h4>
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <p>Descripcion</p>
            </div>
          </div>
          <div class="producto">
            <div class="producto-1">
                <img src="PROYECTO/images/comida4.jpg">
                <h4>Producto</h4>
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <p>Descripcion</p>
            </div>
          </div>
          <div class="producto">
            <div class="producto-1">
              <img src="PROYECTO/images/comida5.png">
              <h4>Producto</h4>
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <p>Descripcion</p>
            </div>
          </div>

      </div>

    </div>
  </main>

@endsection
