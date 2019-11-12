<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => bcrypt('password'),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
