<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
        	'product_id' => 1,
        	'user_id' => 1,
        	'quantity' => 3,
        ]);
        DB::table('orders')->insert([
        	'product_id' => 3,
        	'user_id' => 1,
        	'quantity' => 3,
        ]);
        DB::table('orders')->insert([
        	'product_id' => 4,
        	'user_id' => 1,
        	'quantity' => 2,
        ]);
        DB::table('orders')->insert([
        	'product_id' => 1,
        	'user_id' => 2,
        	'quantity' => 3,
        ]);
        DB::table('orders')->insert([
        	'product_id' => 1,
        	'user_id' => 3,
        	'quantity' => 3,
        ]);
        DB::table('orders')->insert([
        	'product_id' => 1,
        	'user_id' => 4,
        	'quantity' => 3,
        ]);
        DB::table('orders')->insert([
        	'product_id' => 5,
        	'user_id' => 1,
        	'quantity' => 4,
        ]);
    }
}
