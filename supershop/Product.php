<?php
class Product
{
    public $name;
    public $price;
    public $barcode;

    public function __construct($name, $price, $barcode)
    {
        $this->name = $name;
        $this->price = $price;
        $this->barcode = $barcode;
    }
}