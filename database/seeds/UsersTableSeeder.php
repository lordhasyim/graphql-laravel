<?php

use App\User;
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
        User::truncate();
        $faker = \Faker\Factory::create();
        $password = bcrypt('secret');
        // User::create([
        //     'name' => $faker->name,
        //     'email' => 'graphql@test.com',
        // ]);

        for ($i = 0; $i < 10; ++$i) { 
            User::create([
                'name' => $faker->name,
                'email'    => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
