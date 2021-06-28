<?php
class Product{
    public $name;
    public $price;
    public $inStock;

    function __construct(string $name, int $price, int $qnty) {
        $this->name = $name;
        $this->price = $price;
        $this->qnty = $qnty;
    }

}

$pc = new Product('Macbook', 1400, 5);