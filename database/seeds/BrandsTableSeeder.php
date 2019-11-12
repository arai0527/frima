<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        $array = [
            'シャネル',
            'ナイキ',
            'ルイヴィトン',
            'シュプリーム',
            'アディダス',
        ];

        for ($i = 0; $i < 5; $i++)
        {
            DB::table('brands')->insert([
                'name' => $array[$i],
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
