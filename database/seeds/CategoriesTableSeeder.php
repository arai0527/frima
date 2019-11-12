<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
            'レディース',
            'メンズ',
            'ベビー・キッズ',
            'インテリア・住まい・小物',
            '本',
            '音楽',
            'ゲーム',
            'コスメ',
            '家電',
            'スマホ',
            'チケット',
            '自動車',
            'バイク',
            'スポーツ',
            'ハンドメイド',
        ];

        for ($i = 0; $i < 15; $i++)
        {
            DB::table('categories')->insert([
                'name' => $array[$i],
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
