<?php
$title = 'Shorthand Echo';
$name = 'Jem';
$favorites = ['Mints', 'Toffee', 'Bubble gum'];
$fav_count = 0;
foreach ($favorites as $candy) {
    $fav_count++;
}
$show_favorites = $fav_count > 0;

require 'includes/header.php';
?>
    <h2>Welcome <?= $name ?></h2>
    <?php if ($show_favorites): ?>
        <p>Your favorite type of candy is: <?= $favorites[0] ?></p>
        <p>You have <?= $fav_count ?> favorite candies.</p>
        <h2>Your Favorites</h2>
        <table>
            <tr><th>Rank</th><th>Candy</th><th>Pick</th></tr>
            <?php for ($i = 0; $i < $fav_count; $i++): ?>
                <tr><td><?= $i + 1 ?></td><td><?= $favorites[$i] ?></td><td><?= $i === 0 ? 'Top favorite' : 'Also a favorite' ?></td></tr>
            <?php endfor; ?>
        </table>
    <?php else: ?>
        <p>You do not have any favorites yet.</p>
    <?php endif; ?>
    <h2>A Sweet Pick</h2>
    <?php if ($show_favorites && $favorites[0] === 'Mints'): ?>
        <p>Mints are your first pick. Check the candy page for the current offer.</p>
    <?php elseif ($show_favorites): ?>
        <p>Visit the candy page to find more treats to add to your favorites.</p>
    <?php else: ?>
        <p>Browse the candy page to find your first favorite.</p>
    <?php endif; ?>
<?php include 'includes/footer.php'; ?>
