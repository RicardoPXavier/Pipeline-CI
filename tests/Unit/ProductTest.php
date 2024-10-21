<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /** @test */
    public function it_checks_if_the_product_is_on_sale()
    {
        // Suponha que o produto tenha um desconto maior que zero
        $product = new Product();
        $product->price = 100;
        $product->discount = 20;

        // Verifica se o método isOnSale() retorna true
        $this->assertTrue($product->isOnSale());
    }
}
