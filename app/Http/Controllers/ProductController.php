<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $this->validate( $request, [
          'prodPrecio' => 'required', 'numeral',
          'prodStock' => 'required', 'numeral',
          'prodName' => 'required', 'string', 'min:2', 'unique:products',
          'prodDesc' => 'max:255',
          'prodImagen' => 'required', 'mimes:jpeg,png,jpg,gif',
          'prodSabor' => 'required', 'min:1', 'max:2',
          'ingredients' => 'required', 'min:1',
          'categories' => 'required', 'min:1',

      ]);
      if ($request->file('prodImagen')) {
        $folder = 'public/productos';
        $path = $request->file('prodImagen')->storePublicly( $folder );
      }
       $product = Product::create([
          'name' => $request->input('prodName'),
          'price' => $request->input('prodPrecio'),
          'description' => $request->input('prodDesc'),
          'image' => $path??null,
          'stock' => $request->input('prodStock'),
          'flavour' => $request->input('prodSabor'),
      ]);
      foreach ($request->input('categories') as $category) {
        $product->categories()->attach($category);
      }
      foreach ($request->input('ingredients') as $ingredient) {
        $product->ingredients()->attach($ingredient);
      }
      return redirect('/catalogo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
