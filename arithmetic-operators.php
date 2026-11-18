<?php
$title = 'Expressions & Operators';
$items = 3;
$cost = 5;
$subtotal = $items * $cost;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
$prefix = 'Thank you';
$name = 'Jem';
$message = $prefix . ', ' . $name;
$item = 'Mints';
$stock = 9;
$wanted = 7;
$deliver = true;
$can_buy = ($wanted > 0 && $wanted <= $stock && $deliver);
$remaining = $stock;
if ($can_buy) {
    $remaining -= $wanted;
}

require 'includes/header.php';
?>
    <h2><?= $name ?>'s Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax (20%): $<?= $tax ?></p>
    <p>Total: $<?= $total ?></p>
    <h2>Cart Breakdown</h2>
    <table>
        <tr><th>Pack</th><th>Cost</th><th>Running subtotal</th></tr>
        <?php
        $pack = 1;
        $running = 0;
        while ($pack <= $items) {
            $running += $cost;
        ?>
            <tr><td><?= $pack ?></td><td>$<?= $cost ?></td><td>$<?= $running ?></td></tr>
        <?php
            $pack++;
        }
        ?>
    </table>
    <h2>Stock Check</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Delivery: <?= $deliver ? 'Available' : 'Unavailable' ?></p>
    <?php if ($wanted <= 0): ?>
        <p>Please choose at least one pack.</p>
    <?php elseif ($wanted > $stock): ?>
        <p>There is not enough stock for this order.</p>
    <?php elseif (!$deliver): ?>
        <p>Delivery is currently unavailable.</p>
    <?php else: ?>
        <p>You can buy <?= $wanted ?> packs of <?= $item ?>.</p>
        <p>Stock after this order: <?= $remaining ?> packs</p>
    <?php endif; ?>
    <p><?= $message ?></p>
<?php include 'includes/footer.php'; ?>
