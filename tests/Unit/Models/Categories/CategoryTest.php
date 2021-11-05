<?php

namespace Tests\Unit\Models\Categories;

use App\Models\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_many_children()
    {
        $categories = Category::factory(10)->create();
    }
}
