<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserProfileSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 500; $i++) { 
            UserProfile::create([
                'date_of_birth' => '1999-08-25',
                'address' => $faker->address,
                'photo' => 'https://picsum.photos/640/480',
                'phone_number' => $faker->phoneNumber,
                'user_id' => $i+1,
            ]);
        }
    }
}
