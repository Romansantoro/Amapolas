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
      ]);
      if ($request->input['avatar']) {
        $folder = 'avatars';
        $path = $request->input('prodImagen')->storePublicly( $folder );
      }
       Product::create([
          'name' => $request->input('prodName'),
          'price' => $request->input('prodPrecio'),
          'description' => $request->input('prodDesc'),
          'image' => $request->input('prodImagen')??null,
          'stock' => $request->input('prodStock'),
          'flavour' => $request->input('prodSabor'),
      ]);
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
