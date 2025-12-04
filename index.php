<?php
$user = "Lauren";

$pagbati = "Hello, " . $user . "!";

$offer = [
    "Ice Cream",  
    3,            
    150,          
    120           
];

$reg_price = $offer[1] * $offer[2];  
$offer_price = $offer[1] * $offer[3]; 

$savings = $reg_price - $offer_price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Ice Cream Store</title>
    <link rel = "stylesheet" href = "styles.css">

</head>
    <nav>
      <a href="index.php">Home</a> | 
      <a href="product.php">Flavor</a> | 
      <a href="about.php">About</a> | 
      <a href="contact.php">Contact</a>
    </nav>
<body>
    <h1><?= $pagbati ?></h1>
    <div class="savings-circle">
        P<?= $savings ?>
    </div>

    <p>Buy <?= $offer[1] ?> scoops of <?= $offer[0] ?> and enjoy your special discount!</p>
    <p>Discounted Price: P<?= $offer_price ?></p>
    <p>Regular price: P<?= $reg_price ?></p>
</body>
        <footer>Lauren A. Garin WD-201 &copy; <?php echo date('Y')?></footer>
</html>
