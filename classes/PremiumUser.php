<?php


class PremiumUser extends User{
    function __construct(string $name, string $email, int $age, string $password, bool $isPremium = true, int $discount = 20) {
        parent::__construct($name, $email, $age, $password);
        $this->isPremium = $isPremium;
        $this->discount = $discount;
    }
}
?>

