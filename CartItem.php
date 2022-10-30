<?php


class CartItem
{
    /**
     * CartItem constructor.
     *
     * @param \Product $product
     * @param int      $quantity
     */
    public function __construct(
        private \Product $product, 
        private int $quantity
    )
    {}

    /**
     * @return \Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function increaseQuantity(int $amount = 1)
    {
        if ($this->getQuantity() + $amount > $this->getProduct()->getQuantity()){
            throw new Exception("Product quantity can not be more than ".$this->getProduct()->getQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity(int $amount = 1)
    {
        if ($this->getQuantity() - $amount < 1){
            throw new Exception("Product quantity can not be less than 1");
        }
        $this->quantity -= $amount;
    }
}