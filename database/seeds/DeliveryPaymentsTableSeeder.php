<?php

use Illuminate\Database\Seeder;

class DeliveryPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            '送料込み（出品者負担）',
            '送料含まず（購入者負担）',
        ];

        foreach ($array as $value) {
            DB::table('delivery_payments')->insert([
                'name' => $value,
            ]);
        }
    }
}
