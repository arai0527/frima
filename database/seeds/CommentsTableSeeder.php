<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 0; $i < 40; $i++)
        {
            DB::table('comments')->insert([
                'user_id' => $faker->numberBetween(1, 39),
                'product_id' => $faker->numberBetween(1, 99),
                'text' => $faker->sentence(10),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
