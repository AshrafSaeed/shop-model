<?php 

namespace AshrafSaeed\Shop\Contracts;

interface CustomerInterface
{
    public function getCustomer(int $id): array;
    
    public function getList(): array;
    
    public function isSubscribe(int int): bool;   
}