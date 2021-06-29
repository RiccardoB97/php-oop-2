<?php

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

    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }

}