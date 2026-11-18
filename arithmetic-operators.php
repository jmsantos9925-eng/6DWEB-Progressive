<?php
$items = 3;
$cost = 5;
$subtotal = $items * $items;
$tax = ($subtotal / 100) *20;
$total = $subtotal + $tax;
$prefix = 'Thank you';
$name = 'Jem';
$message = $prefix . ", " . $name;
$item = 'Mints';
$stock = 9;
$wanted = 7;
$deliver = true;
$can_buy = (($wanted <= $stock) && ($deliver == true));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Expressions & Operators</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?></h2>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: $<?= $cost ?></p> 
    <p>Subtotal: $<?= $subtotal ?></p> 
    <p>Tax: $<?= $tax ?></p>
    <p>Total: $<?= $total ?></p>
    <p><?= $message ?></p>
    <h2>Shopping Cart Items</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>
</body>
</html>

