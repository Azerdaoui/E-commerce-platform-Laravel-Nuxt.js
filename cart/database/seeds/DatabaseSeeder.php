<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
