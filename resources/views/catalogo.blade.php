@extends('default')

@section('section')

  <main class="mainCatalogo">
    <div class="contenedor-principal" >
      <h2>Filtros</h2>
      <div class="filtros" >
        <div class="categorias">
          <h3>CATEGORIAS</h3>
          <ul>
            <?php foreach ($categories as $category): ?>
            <label for=""><input type="checkbox" name="" value=""> {{ $category->name }} </label> <br><br>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="ingredientes">
          <h3>INGREDIENTES</h3>
          <ul>
            <?php foreach ($ingredients as $ingredient): ?>
              <label for=""><input type="checkbox" name="" value=""> {{ $ingredient->name }} </label> <br><br>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <h2>CATALOGO</h2>
      <div class="catalogo" >
        @foreach ($products as $product)
          <div class="producto">
            <div class="producto-1">
              <img width="100px" height="100px" src="
              @if ( $product->image == 'avatars/default.jpg' )
                {{ 'avatars/default.jpg' }}
              @else
                {{ Storage::url($product->image) }}
              @endif">
            <a href="verProducto.php"></a>
            </div>
            <div class="producto-2">
              <h4>{{$product->name}}</h4>
              <p>{{$product->description}}</p>
              <a href="/verProducto/{{$product->id}}" class="">Ver Detalle</a>
              <form action="" method="POST">
                <input name="quantity" type="hidden" value="1" />
                <input name="product_id" type="hidden" value="{{$product->id}}" />
                <input name="product_name" type="hidden" value="{{$product->name}}" />
                <button class="btn btn-danger" id="botonCarrito" type="submit">Agregar al Carrito</button>
              </form>
            </div>
          </div>

        @endforeach
        <div class="paginacion">
          {{ $products->links() }}
        </div>

      </div>

    </div>

  </main>


@endsection
