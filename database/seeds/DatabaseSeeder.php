<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $cates = factory(App\Category::class)->times(3)->create();
        $ings = factory(App\Ingredient::class)->times(10)->create();

        $prods = factory(App\Product::class)->times(20)->create();

        foreach ($prods as $prod) {
          $prod->categories()->sync($cates->random(2));
          $prod->ingredients()->sync($ings->random(4));
        }

    }
}
