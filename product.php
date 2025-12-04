<?php
$user = "Lauren";

$pagbati = "Hello";

if ($user) {
    $pagbati = "Hello " . $user;
}

$product = "Ice Cream";
$cost = 20; 

$totals = array();
for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i; 
    $discount = ($cost / 100) * ($i * 4); 
    $totals[$i] = $subtotal - $discount; 
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>The Candy Store</title>
    <link rel = "stylesheet" href = "styles.css">
</head>

    <nav>
      <a href="index.php">Home</a> | 
      <a href="product.php">Flavor</a> | 
      <a href="about.php">About</a> | 
      <a href="contact.php">Contact</a>
    </nav>

<body>
    <div class="container">
        <div class="header">
            <h1>The Ice Cream Store</h1>
            <h2><?= $pagbati ?></h2>
        </div>
        
        <h3>Product: <?= $product ?></h3>
        <p>Price per <?= $product ?>: P<?= $cost ?></p>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Discount</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totals as $quantity => $total): ?>
                    <tr>
                        <td><?= $quantity ?></td>
                        <td>P<?= $cost * $quantity ?></td>
                        <td>P<?= ($cost / 100) * ($quantity * 4) ?></td>
                        <td>P<?= number_format($total, 2) ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <footer>Lauren A. Garin WD-201 &copy; <?php echo date('Y')?></footer>
  </body>
</html>
