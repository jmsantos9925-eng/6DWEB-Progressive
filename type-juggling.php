<?php
$title = 'Type Juggling';
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
$eligible = $buy_qty >= 5 && $free_bonus;
$level = 'VIP';
$perk = match ($level) {
    'VIP' => 'Your member offer includes a free Toffee pack with 5 paid packs.',
    'Regular' => 'Buy 5 Toffee packs to qualify for the bonus offer.',
    default => 'Browse the current candy offers.'
};

require 'includes/header.php';
?>
    <h2>Welcome <?= $name ?></h2>
    <h2>Pack Offer</h2>
    <p>Top item: <?= $best_seller ?></p>
    <p>Packs bought: <?= $packs ?></p>
    <p>Extra packs (numeric string): <?= $extra_packs ?></p>
    <p>Total packs: <?= $total_packs ?></p>
    <h2>Price Offer</h2>
    <p>Original price: $<?= $price ?></p>
    <p>Discount (numeric string): $<?= $discount ?></p>
    <p>Final price: $<?= $final_price ?></p>
    <?php if ($final_price < $price): ?>
        <p>You save $<?= $discount ?> on this pack.</p>
    <?php endif; ?>
    <h2>Special Offers</h2>
    <p>Offer item: <?= $offer_item ?></p>
    <p>Candies with free bonus: <?= $total_candies ?></p>
    <p>Candies without bonus: <?= $regular_candies ?></p>
    <?php if ($eligible): ?>
        <p>Your order qualifies for 1 free pack.</p>
    <?php else: ?>
        <p>Buy at least 5 packs while the bonus offer is available to qualify.</p>
    <?php endif; ?>
    <h2>Bonus Guide</h2>
    <table>
        <tr><th>Paid packs</th><th>Free packs</th><th>Total packs</th></tr>
        <?php
        $qty = 5;
        do {
            $bonus = $qty / 5;
        ?>
            <tr><td><?= $qty ?></td><td><?= $bonus ?></td><td><?= $qty + $bonus ?></td></tr>
        <?php
            $qty += 5;
        } while ($qty <= 20);
        ?>
    </table>
    <h2>Customer Details</h2>
    <p>Promo code: <?= $promo_code ?></p>
    <p>Member tag: <?= $member_tag ?></p>
    <p>Guest tag: <?= $guest_tag ?></p>
    <p><?= $perk ?></p>
<?php include 'includes/footer.php'; ?>
