<?php

class CreditCard{
    protected $name;
    protected $age;
    protected $expiryDate;

    function __construct($name, $number, $ccv, $expiryDate = 2022) {
        $this->name = $name;
        $this->number = $number;
        $this->ccv = $ccv;
        $this->expiryDate = $expiryDate;
    }
}
?>