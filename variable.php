<?php
$title = 'Variables & Arrays';
$name = 'Jem';
$price = '999';
$nutrition = [
    'Fat' => 15,
    'Sugar' => 60,
    'Salt' => 7.1
];
$nutrition['Fat'] = 50;
$nutrition['Fiber'] = 50;
$bestsellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans'];
$offers = [
    ['name' => 'Toffee', 'price' => 17, 'stock' => 120],
    ['name' => 'Mints', 'price' => 20, 'stock' => 66],
    ['name' => 'Fudge', 'price' => 30, 'stock' => 155]
];
$total_stock = 0;

require 'includes/header.php';
?>
    <h2>Welcome <?= $name ?></h2>
    <p>The cost of your candy is $<?= $price ?> per pack.</p>
    <h2>Nutrition (per 100g)</h2>
    <?php foreach ($nutrition as $label => $amount): ?>
        <p><?= $label ?>: <?= $amount ?></p>
    <?php endforeach; ?>
    <h2>Bestsellers</h2>
    <ol>
        <?php foreach ($bestsellers as $candy): ?>
            <li><?= $candy ?></li>
        <?php endforeach; ?>
    </ol>
    <h2>Offers</h2>
    <table>
        <tr><th>Candy</th><th>Price</th><th>Stock</th><th>Availability</th></tr>
        <?php foreach ($offers as $offer): ?>
            <?php
            $total_stock += $offer['stock'];
            if ($offer['stock'] <= 0) {
                $status = 'Sold out';
            } elseif ($offer['stock'] < 100) {
                $status = 'Limited stock';
            } else {
                $status = 'In stock';
            }
            ?>
            <tr><td><?= $offer['name'] ?></td><td>$<?= $offer['price'] ?></td><td><?= $offer['stock'] ?></td><td><?= $status ?></td></tr>
        <?php endforeach; ?>
    </table>
    <p>Total offer stock: <?= $total_stock ?> packs</p>
<?php include 'includes/footer.php'; ?>
