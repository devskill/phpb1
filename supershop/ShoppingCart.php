<?php
require_once("Membership.php");
require_once("Product.php");
require_once("CartItem.php");

class ShoppingCart
{
    public $cartItems;
    private $appiedMembership;

    public function __construct()
    {
        $this->cartItems = [];
    }

    public function addItem($product, $quanity)
    {
        $this->cartItems[] = new CartItem($product, $quanity);
    }

    public function applyMembership($membership)
    {
        if($membership != null)
        {
            $this->appiedMembership = $membership;
        }
    }

    public function getTotalAmountBeforeDiscount()
    {
        $sum = 0;
        foreach($this->cartItems as $item)
        {
            $sum += ($item->product->price * $item->quantity);
        }
        return $sum;
    }

    public function getTotalAmountAfterDiscount()
    {
        $originalPrice = $this->getTotalAmountBeforeDiscount();
        return $originalPrice - ($originalPrice * $this->appiedMembership->discountAmount);
    }

    public function getChangeAmount($receivedAmount)
    {
        return $receivedAmount - $this->getTotalAmountAfterDiscount();
    }
}