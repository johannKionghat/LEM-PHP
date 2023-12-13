<?php

$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$phrase = "BONJOUR"; 

// Créé une fonction crypto qui décalle chaque lettre de +2 par rapport à l'alphabet.
// Vous avez la fonction strlen() pour récupérer la longueur d'une chaîne de charactère.


function crypto($phrase,$alphabet){
    $letterCrypt = [];
    for ($i = 0; $i < strlen($phrase); $i++){
        $letterCrypt[$i]=($i + 2) % strlen($alphabet);
    }
    return $letterCrypt;
}

print_r(crypto($phrase,$alphabet));