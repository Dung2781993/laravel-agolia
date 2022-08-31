<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $noOfRows = 20;
        $range = range(1, $noOfRows);
        $chunksize = 1000;
        $faker = Faker::create();

        //Customer Data
        foreach (array_chunk($range, $chunksize) as $chunk) {
            $itemData = array();
            foreach ($chunk as $item) {
                $itemData[] = array(
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                    'password' => $faker->password,
                    'user_type' => 'customer',
                    'address' => $faker->address,
                    'postcode' => '1012',
                    'suburb' => 'Amsterdam-Zuid',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                );
            }
            User::insert($itemData);
        }

        //Nanny Data
        foreach (array_chunk($range, $chunksize) as $chunk) {
            $itemData = array();
            foreach ($chunk as $item) {
                $itemData[] = array(
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                    'password' => $faker->password,
                    'user_type' => 'babysister',
                    'address' => $faker->address,
                    'postcode' => '1012',
                    'suburb' => 'Amsterdam-Zuid',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                );
            }
            User::insert($itemData);
        }
    }
}
