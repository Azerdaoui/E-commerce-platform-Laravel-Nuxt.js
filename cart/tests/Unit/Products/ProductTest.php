<?php

namespace Tests\Unit\Products;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_uses_the_slug_for_the_route_key_name()
    {
        $product = new Product;

        $this->assertEquals($product->getRouteKeyName(), 'slug');
    }
}