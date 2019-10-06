<?php

namespace Tests\Unit\Models\Categories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_has_many_children()
    {
        $category = factory(Category::class)->create();

        $category->children()->save(
            factory(Category::class)->create()
        );

        $this->assertInstanceOf(Category::class, $category->children->first());
    }


    public function test_it_can_fetch_only_parents()
    {
        $category = factory(Category::class)->create();

        $category->children()->save(
            factory(Category::class)->create()
        );

        $this->assertEquals(1, Category::parents()->count());
    }


    public function test_it_is_orderabke_by_numbered_order()
    {
        $category = factory(Category::class)->create([
            'order' => 2 ,
        ]);
    
        $anotherCategory = factory(Category::class)->create([
            'order' => 1,
        ]);

        // $category->children()->save(
        //     factory(Category::class)->create()
        // );

        $this->assertEquals($anotherCategory->name, Category::ordered()->first()->name);
    }
}
