<?php

use Illuminate\Database\Seeder;

class ImageProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 1; $i < 100; $i++) {
            DB::table('image_product')->insert([
                'product_id' => $i,
                'image_id' => $faker->numberBetween(2, 12), 
            ]);
        }
    }
}
