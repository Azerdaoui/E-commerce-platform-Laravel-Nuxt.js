<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('category_product')->truncate();
        // Category::truncate();

        $category = Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes',
            'order' => 1,
            'parent_id' => 2,
        ]);

        // $category->categories()->save(Product::first());

        Category::create([
            'name' => 'sunglasses',
            'slug' => 'sunglasses',
            'order' => 2,
            'parent_id' => 2,
        ]);
    }
}
