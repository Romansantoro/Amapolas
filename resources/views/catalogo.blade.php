@extends('default')

@section('section')

  <main class="mainCatalogo">
    <div class="contenedor-productos" >
      <h2>Filtros</h2>
      <div class="filtros" >
        <ul><br>
          <?php foreach ($categories as $category): ?>
            <label for=""><input type="checkbox" name="" value=""> {{ $category->name }} </label> <br><br>
          <?php endforeach; ?>
          <?php foreach ($ingredients as $ingredient): ?>
            <label for=""><input type="checkbox" name="" value=""> {{ $ingredient->name }} </label> <br><br>
          <?php endforeach; ?>

        </ul>
      </div>
      <h2>Catalogo de productos</h2>
      <div class="catalogo" >
        @foreach ($products as $product)
          <div class="producto">
            <div class="producto-1">
              <img width="100px" height="100px" src="{{ Storage::url($product->image) }}">
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
