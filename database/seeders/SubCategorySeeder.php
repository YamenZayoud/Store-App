<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
        	'name' => 'New',
        	'catogery_id' => 1,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'New',
        	'catogery_id' => 2,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'New',
        	'catogery_id' => 3,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'Clothes',
        	'catogery_id' => 1,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'Clothes',
        	'catogery_id' => 2,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'Clothes',
        	'catogery_id' => 3,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'Shoes',
        	'catogery_id' => 1,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'Shoes',
        	'catogery_id' => 2,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
        DB::table('sub_categories')->insert([
        	'name' => 'Shoes',
        	'catogery_id' => 3,
        	'image' => 'images/gallary/1694375023_tech.png',
        ]);
    }
}
