<?php

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            '新品、未使用',
            '未使用に近い',
            '目立った傷や汚れなし',
            'やや傷や汚れあり',
            '傷や汚れあり',
        ];

        foreach ($array as $value) {
            DB::table('conditions')->insert([
                'name' => $value,
            ]);
        }
    }
}
