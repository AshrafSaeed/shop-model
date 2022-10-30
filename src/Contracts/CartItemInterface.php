<?php

namespace AshrafSaeed\Shop\Contracts;

use AshrafSaeed\Shop\Product;

interface CartItemInterface
{
    
    public function getProduct(): Product;
    
    public function getQuantity(): int;
    
    public function increaseQuantity(int $amount = 1);
    
    public function decreaseQuantity(int $amount = 1);
}