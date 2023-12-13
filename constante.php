<?php
//constantes
define('TVA', 0.2);
define('PRICE', [
'bananas' => 2.5,
'orange' => 1.5,
]);

// codes utiles
$quantity = 5;
$bananasHT = PRICE['bananas'] * $quantity;
$bananasTTC = $bananasHT*(TVA + 1);

// code principal

echo "<p>Prix HT de la commande: $bananasHT euro;</p>";
echo "<p>Prix TTC de la commande: $bananasTTC euro;</p>";