<?php
$title = 'Home';
$name = 'Jem';
$member = true;
$day = 'Wednesday';
$pages = [
    ['name' => 'Candy', 'file' => 'variable.php', 'text' => 'See the bestsellers, nutrition, and available offers.'],
    ['name' => 'Favorites', 'file' => 'echo-shorthand.php', 'text' => 'Check your favorite candies and their rankings.'],
    ['name' => 'Cart', 'file' => 'arithmetic-operators.php', 'text' => 'Review your order, tax, and stock availability.'],
    ['name' => 'Promos', 'file' => 'type-juggling.php', 'text' => 'See your bonus packs, discounts, and promo code.']
];

switch ($day) {
    case 'Wednesday':
        $special = 'Midweek treat: buy 5 Toffee packs and get 1 free.';
        break;
    case 'Saturday':
    case 'Sunday':
        $special = 'Weekend treat: enjoy $2.50 off a Mints pack.';
        break;
    default:
        $special = 'Pick a candy and make your day a little sweeter.';
}

require 'includes/header.php';
?>
    <h2>Welcome <?= $name ?></h2>
    <?php if ($member): ?>
        <p>Your member offers are ready. Take a look at the promos page.</p>
    <?php else: ?>
        <p>Welcome, guest. Browse our candies and regular offers.</p>
    <?php endif; ?>
    <h2><?= $day ?> Special</h2>
    <p><?= $special ?></p>
    <h2>Explore the Store</h2>
    <?php foreach ($pages as $page): ?>
        <section>
            <h3><a href="<?= $page['file'] ?>"><?= $page['name'] ?></a></h3>
            <p><?= $page['text'] ?></p>
        </section>
    <?php endforeach; ?>
<?php include 'includes/footer.php'; ?>
