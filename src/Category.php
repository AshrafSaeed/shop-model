<?php 

namespace AshrafSaeed\Shop;

use AshrafSaeed\Shop\Contracts\CategoryInterface;

class Category implements CategoryInterface
{
    /**
     * Product constructor.
     *
     * @param int    $id
     * @param string $name
     */
    public function __construct(
        private int $id, 
        private string $name, 
    )
    {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function addProduct(Product $product): string
    {
    	retiurn 'Product added successfully'
    }
}