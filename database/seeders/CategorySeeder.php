<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Men',
        ]);
        $category1 =Category::create([
            'name' => 'Women',
        ]);
        $category2 = Category::create([
            'name' => 'Kids',
        ]);
    }
}
