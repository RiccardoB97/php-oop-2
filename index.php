<?php
require __DIR__ . '/classes/Product.php';
require __DIR__ . '/classes/User.php';
require __DIR__ . '/classes/PremiumUser.php';
require __DIR__ . '/classes/CreditCard.php';
require __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>
    <main>
        <?php foreach ($products as $product): ?>
            <div>
                <h2><?= strtoupper($product->name)?></h2>
                <span>Item price: <?= $product->price?> - </span>
                <span>In stock: <?= $product->qnty?></span>
            </div>
        <? endforeach; ?>
    </main>


</body>
</html>
