<?php
require __DIR__ . '/classes/Product.php';
require __DIR__ . '/classes/User.php';
require __DIR__ . '/classes/PremiumUser';

$pc = new Product('Macbook', 1400, 5);
var_dump($pc);
var_dump($pc->isInStock());


$randomUser = new User('Mike', 'mike@example.com', 35, []);
var_dump($randomUser);


$premiumUser = new PremiumUser('Riccardo', 'riccardo@example.com', 23,[]);
var_dump($premiumUser);

$premiumUser->buyItem($shoppingList, $pc);

$card = new CreditCard('Riccardo', 'riccardo@example.com', 2022);