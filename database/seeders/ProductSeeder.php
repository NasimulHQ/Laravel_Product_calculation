<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(20, 1) as $index){
            DB::table('products')->insert([
                'code' => $faker->randomNumber(5),
                'name' => $faker->sentence(5),
                'rate' => $faker->randomNumber(5),
            ]);
        }
    }
}
