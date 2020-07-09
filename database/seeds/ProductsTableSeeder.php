<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::truncate();
        $faker = \Faker\Factory::create();

        for($i=0 ; $i < 75 ; $i++ ){
            Products::create([
                'name' => $faker->name,
                'code' => $faker->word,
                'price' => $faker->numberBetween(1,300),
                'status' => 'active'

            ]);
        }
    }
}
