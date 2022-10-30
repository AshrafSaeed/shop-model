<?php 

namespace AshrafSaeed\Shop\Contracts;

use AshrafSaeed\Shop\Product;

interface CategoryInterface
{
    public function getId(): int;
   
    public function getName(): string;
   
    public function addProduct(Product $product): string;
}