<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 20) as $index){
            DB::table('customers')->insert([
                'name' => $faker->sentence(5),
                'phone' => $faker->phoneNumber(11),
                'address' => $faker->paragraph(10),

            ]);
        }
        
    }
}
