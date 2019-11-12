<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            BrandsTableSeeder::class,
            AreasTableSeeder::class,
            ConditionsTableSeeder::class,
            DeliveryDaysTableSeeder::class,
            DeliveryMethodsTableSeeder::class,
            DeliveryPaymentsTableSeeder::class,
            ProductsTableSeeder::class,
            CommentsTableSeeder::class,
            ImagesTableSeeder::class,
            ImageProductTableSeeder::class,
            ImageUserTableSeeder::class,
        ]);
    }
}
