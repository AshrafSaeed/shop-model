<?php


class Product
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
        private string $type,
        private string $name, 
        private string $article_number, 
        private float $price, 
        private int $quantity,
        private string $images
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

    /**
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->article_number;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getStock(int $project_id): int
    {
        // calculate product stock 
        return 200;
    }

}