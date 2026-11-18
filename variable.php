<?php
$name = 'Jem';
$price = '999';
$nutrition = [
    'fat' => 15,
    'sugar' => 60,
    'salt' => 7.1,
];

$nutrition['fat'] = 50;
$nutrition['fiber'] = 50;

$bestsellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans',];

$offers = [
    ['name' => 'Toffee', 'price' => 17, 'stock' => 120,],
    ['name' => 'Mints', 'price' => 20, 'stock' => 66,],
    ['name' => 'Fudge', 'price' => 30, 'stock' => 155,],
];
?>



<!DOCTYPE html>
<html>
<head>
    <title>Variables & Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is $<?php echo $price; ?> per pack.</p>

    <h2>Nutrition (per 100g)</h2>

    <p>Fat: <?php echo $nutrition['fat'];?></p>
    <p>Sugar: <?php echo $nutrition['sugar'];?></p>
    <p>Salt: <?php echo $nutrition['salt'];?></p>
    <p>Fiber: <?php echo $nutrition['fiber'];?></p>

    <ul>
        <li><?php echo $bestsellers[0]?></li>
        <li><?php echo $bestsellers[1]?></li>
        <li><?php echo $bestsellers[2]?></li>
    </ul>

    <h2>Offers</h2>
    <p><?php echo $offers[0]['name']; ?> - $<?php echo $offers[0]['price']; ?></p>
    <p><?php echo $offers[1]['name']; ?> - $<?php echo $offers[1]['price']; ?></p>
    <p><?php echo $offers[2]['name']; ?> - $<?php echo $offers[2]['price']; ?></p>
</body>
</html>