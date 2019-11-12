<?php

use Illuminate\Database\Seeder;

class DeliveryDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            '当日発送',
            '１～2日で発送',
            '３～４日で発送',
            '４～７日で発送',
            '７日～で発送',
        ];

        foreach ($array as $value) {
            DB::table('delivery_days')->insert([
                'name' => $value,
            ]);
        }
    }
}
