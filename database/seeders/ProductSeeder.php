<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        	'name' => 'Product1',
        	'sub_category_id' => 1,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 200,
            'eval'=>7,
            'discount'=> 20
        ]);
        DB::table('products')->insert([
        	'name' => 'Product2',
        	'sub_category_id' => 2,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 250,
            'eval'=>8,
            'discount'=> 20
        ]);
        DB::table('products')->insert([
        	'name' => 'Product3',
        	'sub_category_id' => 3,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 100,
            'eval'=>5,
            'discount'=> 25
        ]);
        DB::table('products')->insert([
        	'name' => 'Product4',
        	'sub_category_id' => 4,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 150,
            'eval'=>8,
            'discount'=> 20
        ]);
        DB::table('products')->insert([
        	'name' => 'Product5',
        	'sub_category_id' => 5,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 400,
            'eval'=>6,
            'discount'=> 30
        ]);
        DB::table('products')->insert([
        	'name' => 'Product6',
        	'sub_category_id' => 6,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 200,
            'eval'=>4,
            'discount'=> 20
        ]);
        DB::table('products')->insert([
        	'name' => 'Product7',
        	'sub_category_id' => 7,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 230,
            'eval'=>3,
            'discount'=> 10
        ]);
        DB::table('products')->insert([
        	'name' => 'Product8',
        	'sub_category_id' => 8,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 200,
            'eval'=>7,
            'discount'=> 0
        ]);
        DB::table('products')->insert([
        	'name' => 'Product9',
        	'sub_category_id' => 9,
        	'image' => 'images/gallary/1694375023_tech.png',
            'price'=> 250,
            'eval'=>9,
            'discount'=> 5
        ]);

    }
}
