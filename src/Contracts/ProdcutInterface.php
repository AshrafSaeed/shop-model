<?php

namespace AshrafSaeed\Shop\Contracts;

interface ProdcutInterface
{
    public function getId(): int;
    
    public function getName(): string;
    
    public function getArticleNumber(): string;
    
    public function getPrice(): float;
    
    public function getQuantity(): int;
    
    public function getImage(): string;
    
    public function getProductType(): string;

    public function getStock(int $project_id): int;

}