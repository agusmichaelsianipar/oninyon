<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 500; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('123123123'),
            ]);
        }
    }
}
