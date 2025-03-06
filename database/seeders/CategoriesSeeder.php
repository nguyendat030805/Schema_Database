<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['names'=>'Electronics', 'description'=>'vso','created_at' => now(), 'updated_at' => now()],
            ['names' => 'Clothing','description'=>'iso', 'created_at' => now(), 'updated_at' => now()],
            ['names' => 'Books','description'=>'mco', 'created_at' => now(), 'updated_at' => now()],
            
        ]);
    }
}
