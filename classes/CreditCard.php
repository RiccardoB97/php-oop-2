<?php

class CreditCard{
    protected $name;
    protected $age;
    protected $expiryDate;

    function __construct($name, $age,$expiryDate = 2022) {
        $this->name = $name;
        $this->age = $age;
        $this->expiryDate = $expiryDate;
    }
}
