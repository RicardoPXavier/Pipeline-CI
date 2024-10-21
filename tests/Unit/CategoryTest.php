<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class CategoryTest extends TestCase
{
    /** @test */
    public function it_checks_if_the_product_belongs_to_a_specific_category()
    {
        // Suponha que o produto tenha as seguintes categorias
        $product = new Product();
        $product->categories = ['Electronics', 'Furniture', 'Books'];

        // Verifica se o produto pertence à categoria 'Books'
        $this->assertContains('Books', $product->categories);
    }
}
