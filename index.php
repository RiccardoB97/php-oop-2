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
    protected $shoppingList = [];

    function __construct(string $name, string $email, int $age, array $shoppingList) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->shoppingList = $shoppingList;
    }

    function buyItem($list, $item){
        return array_push($list,$item);
    }

}

$randomUser = new User('Mike', 'mike@example.com', 35, []);
var_dump($randomUser);

class PremiumUser extends User{
    function __construct(string $name, string $email, int $age, array $shoppingList, bool $isPremium = true, int $discount = 20) {
        parent::__construct($name, $email, $age, $shoppingList);
        $this->isPremium = $isPremium;
        $this->discount = $discount;
    }



}

$premiumUser = new PremiumUser('Riccardo', 'riccardo@example.com', 23,[]);
var_dump($premiumUser);

$premiumUser->buyItem($shoppingList, $pc);