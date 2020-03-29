<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'name' => 'Home',
            'slug' => 'home',
            // 'order' => '',
            // 'parent_id' => '',
        ]);

        Category::create([
            'name' => 'Categories',
            'slug' => 'categories',
            // 'order' => '',
            // 'parent_id' => '',
        ]);

        Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes',
            'order' => 1,
            'parent_id' => 2,
        ]);

        Category::create([
            'name' => 'sunglasses',
            'slug' => 'sunglasses',
            'order' => 2,
            'parent_id' => 2,
        ]);
    }
}
