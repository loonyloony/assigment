<?php

class Shopping
{
    private $user;

    private $cart;

    private $total_price;

    public function getTotalPrice()
    {
        return $this->total_price;
    }

    public function addToCart(User $userObj, Product $productObj, $quantity)
    {
        $temp = $this->total_price;
        $temp += $productObj->getPrice() * $quantity;
        if ($temp < 0)
        {
            return false;
        }
        $this->total_price = $temp;
        $this->cart[$productObj->getId()]['product_id'] = $productObj->getId();
        $this->cart[$productObj->getId()]['quantity'] += $quantity;

        return true;
    }
}