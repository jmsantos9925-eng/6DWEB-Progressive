<?php
$name = 'Jem';
$best_seller = 'Mints';
$packs = 4;
$extra_packs = '3';
$total_packs = $packs + $extra_packs;
$price = 10;
$discount = '2.5';
$final_price = $price - $discount;
$offer_item = 'Toffee';
$buy_qty = 5;
$free_bonus = true;
$total_candies = $buy_qty + $free_bonus;
$no_bonus = false;
$regular_candies = $buy_qty + $no_bonus;
$promo_code = 'SWEET' . 10;
$member_tag = 'VIP ' . true;
$guest_tag = 'Guest ' . false;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Type Juggling</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Candy Store ni Thanos</h1>
    <h2>Welcome <?= $name ?></h2>

    <h2>Best</h2>
    <p>Top Item: <?= $best_seller ?></p>
    <p>Packs Bought: <?= $packs ?></p>
    <p>Total Packs: <?= $total_packs ?></p>
    <p>Final Price: $<?= $final_price ?></p>

    <h2>Special Offers</h2>
    <p>Offer Item: <?= $offer_item ?></p>
    <p>Candies with Free Bonus: <?= $total_candies ?></p>
    <p>Candies without Bonus: <?= $regular_candies ?></p>

    <h2>Customer Details</h2>
    <p>Promo Code: <?= $promo_code ?></p>
    <p>Member Tag: <?= $member_tag ?></p>
    <p>Guest Tag: <?= $guest_tag ?></p>
</body>
</html>
