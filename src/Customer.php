<?php 

namespace AshrafSaeed\Shop;

use AshrafSaeed\Shop\Contracts\CustomerInterface;

class Customer implements CustomerInterface
{
    /**
     * Product constructor.
     *
     * @param int    $id
     * @param string $name
     * @param string $address
     * @param string $phone
     * @param string $email
     * @param bool $is_subscribe
     */
    public function __construct(
        private int $id, 
        private string $name, 
        private string $address,
        private string $phone,
        private string $email,
        private bool $is_subscribe
    )
    {}

    /**
     * @return int
     */
    public function getCustomer(int $id): array
    {
        return [
            $this->name,
            $this->address,
            $this->phone,
            $this->email,
            $this->is_subscribe,
        ]
    }

    /**
     * @return int
     */
    public function getList(): array
    {
        return $model->all();
    }

    /**
     * @return string
     */
    public function isSubscribe(int int): bool
    {
        return true
    }

}