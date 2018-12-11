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
        @foreach ($products as $product)
          <div class="producto">
            <div class="producto-1">
              <img src="{{ Storage::url($product->image) }}">
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <h4>{{$product->name}}</h4>
              <p>{{$product->description}}</p>
            </div>
          </div>

        @endforeach


      </div>

    </div>

  </main>
{{ $products->links() }}
@endsection
