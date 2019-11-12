<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'NoImage.png',
            'booties-2047596_640.jpg',
            'boots-3450702_640.jpg',
            'clothing-store-984396_640.jpg',
            'fashion-918446_640.jpg',
            'fashion-1283863_640.jpg',
            'glass-2781945_640.jpg',
            'iphone6plus-538898_640.jpg',
            'key-193376_640.jpg',
            'store-984393_640.jpg',
            'toy-2113528_640.jpg',
            'videos-1240742_640.png',
        ];

        foreach($names as $value) {
            DB::table('images')->insert([
                'name' => hash('sha256', $value) . '.jpg',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
