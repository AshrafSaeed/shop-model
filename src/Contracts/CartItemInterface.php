<?php

namespace AshrafSaeed\Shop\Contracts;

interface CartItemInterface
{
    
    public function getProduct(): Product;
    
    public function getQuantity(): int;
    
    public function increaseQuantity(int $amount = 1);
    
    public function decreaseQuantity(int $amount = 1);
}