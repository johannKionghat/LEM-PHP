<?php
/**
 * Exercice 8
 * Calculer la moyenne des valeurs suivante , pensez à les ranger dans un tableau associatif
 * 
 * Alan 13
 * Sandrine 17
 * Claire 18
 * Romain 14
 * Antoine 13
 * Sophie 18.5
 */

$array = [
    "Alan" => 13, 
    "Sandrine" => 17, 
    "Claire" => 18, 
    "Romain" => 14, 
    "Antoine" => 13, 
    "Sophie" => 18.5
];
$counter=0;
$sum=0;
$avg=0;
foreach ($array as $key => $value) {
    $counter++;
    $sum += $value;
    $avg = round($sum/$counter);
}
echo $sum . "/" . $counter."\n";
echo "Voici la moyenne des notes : $avg";