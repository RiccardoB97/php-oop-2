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

    function isInStock(){
        if($this->qnty > 0){
            return $this->inStock = true;
        }
    }

}

$pc = new Product('Macbook', 1400, 5);
var_dump($pc);
var_dump($pc->isInStock());


class User{
    protected $name;
    protected $email;
    protected $age;

    function __construct(string $name, string $email, int $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
}

$randomUser = new User('Mike', 'mike@example.com', 35);
var_dump($randomUser);

class PremiumUser extends User{
    function __construct(string $name, string $email, int $age, bool $isPremium = true, int $discount = 20) {
        parent::__construct($name, $email, $age);
        $this->isPremium = $isPremium;
        $this->discount = $discount;
    }
}