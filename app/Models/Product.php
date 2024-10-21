<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Propriedades fictícias para fins de teste
    public $price;
    public $discount;
    public $categories;

    // Método para verificar se o produto está em promoção
    public function isOnSale()
    {
        return $this->discount > 0;
    }
}
