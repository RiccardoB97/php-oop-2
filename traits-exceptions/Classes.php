<?php

class User{
    protected $name;
    protected $age;
    protected $score;

    function __construct(string $name, int $age, int $score){
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;

    }
}

class Admin extends User{
    use Score, Namable;
    protected $isAdmin;

}

trait Namable{
    public function getName()
    {
        return $this->name;
    }
}

trait Score {
    public function getScore(){
        return $this->score;
    }
}

function checkAge($age){
    if(! is_int($age)){
        throw new Exception ('Age must be a number!');
    }
    return true;
}

try{
    checkAge(3);
    echo 'Age is a number';
}

catch(Exception $e){
    echo 'Error, age must be a number'. $e->getMessage();
}
