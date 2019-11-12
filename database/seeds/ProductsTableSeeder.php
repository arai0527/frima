<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 0; $i < 100; $i++)
        {
            $price = $faker->numberBetween(10, 5000) * 10;

            DB::table('products')->insert([
                'user_id' => $faker->numberBetween(1, 39),
                'name' => $faker->word(),
                'category_id' => $faker->numberBetween(1, 15),
                'brand_id' => $faker->numberBetween(1, 5),
                'condition_id' => $faker->numberBetween(1, 5),
                'delivery_payment_id' => $faker->numberBetween(1, 2),
                'delivery_method_id' => $faker->numberBetween(1, 4),
                'area_id' => $faker->numberBetween(1, 47),
                'delivery_day_id' => $faker->numberBetween(1, 4),
                'price' => $price,
                'text' => $faker->sentence(10),
                'sold_flg' => $faker->numberBetween(0, 1),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
