<?php 

class Category
{
    /**
     * Product constructor.
     *
     * @param int    $id
     * @param string $name
     * @param string $article_number
     * @param float  $price
     * @param int    $quantity
     * @param string $images
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

    public function addProduct(Product $product): 
    {
    	

    }
}