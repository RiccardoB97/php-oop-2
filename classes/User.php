<?php

class User{
    protected $name;
    protected $email;
    protected $age;
    protected $password;

    function __construct(string $name, string $email, int $age, string $password) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }

    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }

}