<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->decimal('price',6,2);
        $table->integer('stock');
        $table->integer('rating')->nullable();
        $table->string('description')->nullable();
        $table->string('flavour');
        $table->string('image')->nullable();
        $table->timestamps();
        $table->unsignedInteger('category_id')->nullable();
        $table->unsignedInteger('ingredients_id')->nullable();
      });

      Schema::create('ingredients', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

      Schema::create('addresses', function (Blueprint $table) {
        $table->increments('id');
        $table->string('street')->nullable();
        $table->integer('number')->nullable();
        $table->integer('apartment')->nullable();
        $table->timestamps();
      });

      Schema::create('purchases', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamp('date')->nullable();
        $table->timestamps();
        $table->unsignedInteger('user_id')->nullable();
      });

      Schema::create('categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

      Schema::create('shoppingCart', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamp('date')->nullable();
        $table->timestamps();
        $table->unsignedInteger('user_id')->nullable();
      });

      Schema::create('shoppingCart-products', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('quantity');
        $table->decimal('amount',4,2);
        $table->timestamp('date')->nullable();
        $table->timestamps();
        $table->unsignedInteger('shoppingCart_id')->nullable();
        $table->unsignedInteger('product_id')->nullable();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
      Schema::drop('products');
      Schema::drop('ingredients');
      Schema::drop('addresses');
      Schema::drop('purchases');
      Schema::drop('categories');
      Schema::drop('shoppingCart');
      Schema::drop('shoppingCart-products');

    }
}
