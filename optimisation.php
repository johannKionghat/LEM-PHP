<?php
function factoriel($n) {
    // Tableau pour stocker les résultats déjà calculés
    $resultats = array();

    // Cas de base : 0! et 1! sont égaux à 1
    $resultats[0] = 1;
    $resultats[1] = 1;

    // Calcul du factoriel pour les valeurs supérieures à 1
    for ($i = 2; $i <= $n; $i++) {
        $resultats[$i] = $resultats[$i - 1] * $i;
    }

    // Retourne le résultat pour n!
    return $resultats[$n];
}
$n = 5;
$resultat = factoriel($n);
echo "Le factoriel de $n est : $resultat";

// function factorial($n, $memo = [])
// {
//     if ($n == 0 || $n == 1) {
//         return 1;
//     }

//     if (isset($memo[$n])) {
//         // Utiliser le résultat mémorisé si disponible
//         return $memo[$n];
//     }

//     // Calculer le factoriel et le mémoriser
//     $result = $n * factorial($n - 1, $memo);
//     $memo[$n] = $result;

//     return $result;
// }
// $number = 2;
// $result = factorial($number);
// echo "Le factoriel de $number est : $result";

?>
