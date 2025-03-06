<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =   Faker::create();
        foreach (range(1,100) as $index){
            DB::table('products4')->insert([
                    'names' => $faker->word,
                    'prices' => $faker->randomFloat(2,10,100),
                    'images' => $faker->imageUrl(200,200,'products'),
                    'descriptions' => $faker->text(100),
                    'cate_id' => rand(1,30),
                    'created_at' => now(),
                    'updated_at' => now(),
            ]);
        }
        
        
    }
}
