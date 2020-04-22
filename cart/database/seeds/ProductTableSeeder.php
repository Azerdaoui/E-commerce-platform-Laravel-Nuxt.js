<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('category_product')->truncate();
        // Product::truncate();

        $product = Product::create([
            'name' => 'Nike Air max',
            'slug' => 'nike-air-max',
            'price' => 230,
            'description' => ''
        ]);

        Product::create([
            'name' => 'Rayban 2020',
            'slug' => 'rayban-2020',
            'price' => 11000,
            'description' => ''
        ]);
    }
}
