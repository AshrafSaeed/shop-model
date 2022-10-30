<?php

namespace AshrafSaeed\Shop\Contracts;

use AshrafSaeed\Shop\{CartItem, Product};

interface CartInterface
{
    public function getItems(): array;

    public function setItems($items): void;

    public function addProduct(Product $product, int $quantity): CartItem;
        
    public function removeProduct(Product $product): void;
    
    public function getTotalQuantity(): int;
    
    public function getTotalSum(): int;

}