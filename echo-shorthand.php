<?php
$name = 'Jem';
$favorites = ['Mints', 'Toffee', "Bubble gum",];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shorthand echo/title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorites tpye of candy is: <?= $favorites[0] ?></p>
</body>
</html>