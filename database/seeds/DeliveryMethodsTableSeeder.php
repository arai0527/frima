<?php

use Illuminate\Database\Seeder;

class DeliveryMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            '普通郵便',
            'らくらく便',
            'ゆうゆう便',
            '大型便',
        ];

        foreach ($array as $value) {
            DB::table('delivery_methods')->insert([
                'name' => $value,
            ]);
        }
    }
}
