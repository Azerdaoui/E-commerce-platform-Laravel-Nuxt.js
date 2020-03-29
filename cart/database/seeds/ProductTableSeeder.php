<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create([
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
