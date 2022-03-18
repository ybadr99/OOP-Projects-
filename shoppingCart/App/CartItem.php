<?php

namespace App;
use Exception;

class CartItem
{

    private Product $product;
    private int $quantity;

    function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    // TODO Generate getters and setters of properties

    public function getProduct(){
        return $this->product;
    }

    public function setProduct($product){
        $this->product = $product;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }


    public function increaseQuantity($amount = 1)
    {
        // $quantity must not become more than whatever is Product::$availableQuantity

        if ($this->quantity + $amount > $this->getProduct()->getAvailableQuantity()) {

            throw new Exception('Product Quantity can not be more ' . $this->getProduct()->getAvailableQuantity());
        }

        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount = 1)
    {
        if ($this->quantity - $amount < 1) {

            throw new Exception('Product Quantity can not be less than 1');
        }

        $this->quantity -= $amount;
    }
}
