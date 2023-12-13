<?php

/**
 * 07 Exercice zip
 * Dans le mot suivant
 * Comptez le nombre de i
 * Puis comptez le nombre de chaque lettre
 */

$phrase = "Mississippi";
$counter = 0;
for ($i = 0; $i < strlen($phrase); $i++) {
    if ($phrase[$i] == "i") {
        $counter++;
    }
}
echo " la lettre i se trouve ".$counter." fois dans $phrase\n";

$arrayPhrase = [];
for ($i = 0; $i < strlen($phrase); $i++) {
    $arrayPhrase[] = $phrase[$i];
}
$letterOccurence=[];
foreach ($arrayPhrase as $a) {
    if (isset($letterOccurence[$a])){
        $letterOccurence[$a]++;
    }else{
        $letterOccurence[$a] = 1;
    }
}

echo implode("-", $arrayPhrase)."\n";
print_r ($letterOccurence);

