<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['prodName'=>'Torta de chocolate','prodPrecio'=>'255','prodStock'=>'10','prodDesc'=>'Exquisita torta casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '1'],
            ['prodName'=>'Torta de ricota','prodPrecio'=>'235','prodStock'=>'10','prodDesc'=>'Exquisita torta casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '2'],
            ['prodName'=>'Tarta de espinaca','prodPrecio'=>'135','prodStock'=>'10','prodDesc'=>'Exquisita tarta casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '3'],
            ['prodName'=>'Budin de pan','prodPrecio'=>'335','prodStock'=>'10','prodDesc'=>'Exquisito budin casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '4'],
            ['prodName'=>'Empanada de atun','prodPrecio'=>'225','prodStock'=>'10','prodDesc'=>'Exquisita empanada casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '5'],
            ['prodName'=>'Ensalada de fruta','prodPrecio'=>'115','prodStock'=>'10','prodDesc'=>'Una fresca ensalada casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '6'],
            ['prodName'=>'Bomba de papa','prodPrecio'=>'345','prodStock'=>'10','prodDesc'=>'Exquisita bomba de papa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '7'],
            ['prodName'=>'Sopa de zapallo','prodPrecio'=>'535','prodStock'=>'10','prodDesc'=>'Exquisita sopa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '8'],
            ['prodName'=>'Albondigas con salsa','prodPrecio'=>'235','prodStock'=>'10','prodDesc'=>'Exquisitas albondigas caseras.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '9'],
            ['prodName'=>'Guiso de lentejas','prodPrecio'=>'135','prodStock'=>'10','prodDesc'=>'Exquisito guiso de lentejas.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '10'],
            ['prodName'=>'Pastel de papa','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisito pastel de papa casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '11'],
            ['prodName'=>'Medialunas con miel','prodPrecio'=>'235','prodStock'=>'10','prodDesc'=>'Exquisitas medialunas con miel casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '12'],
            ['prodName'=>'Tortilla de zapallo','prodPrecio'=>'335','prodStock'=>'10','prodDesc'=>'Exquisita tortilla de papa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '13'],
            ['prodName'=>'Falafel','prodPrecio'=>'135','prodStock'=>'10','prodDesc'=>'Exquisito falafel casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '14'],
            ['prodName'=>'Cheesecake','prodPrecio'=>'735','prodStock'=>'10','prodDesc'=>'Exquisito cheesecake casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '15'],
            ['prodName'=>'Lasagna','prodPrecio'=>'535','prodStock'=>'10','prodDesc'=>'Exquisita lasagna casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '16'],
            ['prodName'=>'Milanesa','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisita milanesa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '17'],
            ['prodName'=>'Lemonpie','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisito lemonpie casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '18'],
            ['prodName'=>'Anillos de cebolla','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisitos anillos de cebolla caseros.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '19'],
            ['prodName'=>'Torta romana','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'La mejor torta.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '20'],
        ];
        $ingredients = [
            ['name'=>'Lechuga', 'id' => '1'], ['name'=>'Tomate', 'id' => '2'], ['name'=>'Chocolate', 'id' => '3'],
            ['name'=>'Ricota', 'id' => '4'], ['name'=>'Queso', 'id' => '5'], ['name'=>'Crema', 'id' => '6'],
            ['name'=>'Papa', 'id' => '7'], ['name'=>'Atun', 'id' => '8'], ['name'=>'Zapallo', 'id' => '9'],
            ['name'=>'Lentejas', 'id' => '10'], ['name'=>'Espinaca', 'id' => '11'], ['name'=>'Cebolla', 'id' => '12'],
        ];
        $categories = [
            ['name'=>'Torta', 'id' => '1'], ['name'=>'Tarta', 'id' => '2'], ['name'=>'Empanada', 'id' => '3'],
            ['name'=>'Guiso', 'id' => '4'], ['name'=>'Sopa', 'id' => '5'], ['name'=>'Pasta', 'id' => '6'],
            ['name'=>'Carne', 'id' => '7'], ['name'=>'Verdura', 'id' => '8'],
        ];
        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['prodName'],
                'price'=> $product['prodPrecio'],
                'stock'=> $product['prodStock'],
                'description'=> $product['prodDesc'],
                'flavour'=> $product['prodSabor'],
                'image'=> $product['prodImagen'],
            ]);
        }
        foreach ($ingredients as $ingredient) {
            DB::table('ingredients')->insert([
                'name' => $ingredient['name'],
            ]);
        }
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
            ]);
        }
        DB::table('ingredient_product')->insert([
            'product_id' => $product['id'],
            'ingredient_id' => $ingredient['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $product['id'],
          'category_id' => $ingredient['id']
        ]);
      }

}
