<?php
require_once("Membership.php");
require_once("Product.php");
require_once("ShoppingCart.php");
require_once("CartItem.php");

$membership = new Membership("Jalaluddin", 0.2);

function findProduct($barcodeOrName)
{
    $products = [];
    $products[] = new Product("Bread", 100, "00001");
    $products[] = new Product("Potato", 10, "00002");
    $products[] = new Product("Chicken", 200, "00003");
    $products[] = new Product("Banana", 20, "00004");
    $products[] = new Product("Beef", 150, "00005");
    $products[] = new Product("Vegetable", 100, "00006");

    foreach($products as $product)
    {
        if($product->name === $barcodeOrName || $product->barcode === $barcodeOrName)
            return $product;
    }
}

$shoppingCart = new ShoppingCart();
$shoppingCart->addItem(findProduct("Beef"), 10);
$shoppingCart->addItem(findProduct("Banana"), 5);
$shoppingCart->addItem(findProduct("Chicken"), 4);
$shoppingCart->applyMembership($membership);

echo $shoppingCart->getTotalAmountBeforeDiscount() . "\n";
echo $shoppingCart->getTotalAmountAfterDiscount(). "\n";
echo $shoppingCart->getChangeAmount(2000). "\n";