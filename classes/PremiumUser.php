<?php


class PremiumUser extends User{
    function __construct(string $name, string $email, int $age, array $shoppingList, bool $isPremium = true, int $discount = 20) {
        parent::__construct($name, $email, $age, $shoppingList);
        $this->isPremium = $isPremium;
        $this->discount = $discount;
    }
}
