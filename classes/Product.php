<?php


class Product{
    public $name;
    public $price;
    public $qnty;

    function __construct(string $name, int $price, int $qnty) {
        $this->name = $name;
        $this->price = $price;
        $this->qnty = $qnty;
    }

}
?>
