<?php

namespace AshrafSaeed\Shop\Contracts;

interface CartInterface
{
    public function getItems(): array;

    public function setItems($items): void;

    public function addProduct(Product $product, int $quantity): CartItem;
        
    public function removeProduct(Product $product): void;
    
    public function getTotalQuantity(): int;
    
    public function getTotalSum(): int;

}