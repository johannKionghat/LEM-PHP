<?php 
 /* 03 Exercice
 *
 * 
 * Soit le tableau $data ci-dessous, 
 * 1. Comptez, dans un tableau $results, le nombre d'occurence(s) de 1.
 * 2. Retournez tous les indices ou apparait le nombre 1 dans le tableau $data.
 */

 

$data = [1, 1, 2, 3, 4, 8, 8, 5, 6, 6, 9, 9, 10, 11, 12, 14, 48, 48, 51, 51, 1, 1, 1, 51, 3, 3, 3, 51, 51, 51, 51, 51, 0];
$test=3;

function occurence($test,$data){
    $resultat=[];
    $counter=0;
    for ($i=0;$i < count($data);$i++){
        if($data[$i]==$test){
            $counter += 1;
            $resultat[]="$i,";
        }
    }
    $resultats[]=$counter;
    $resultats[]=$resultat;
    return $resultats;
}

$resultats=occurence($test,$data);
$resultat=$resultats[1];
print_r($resultats);
//afficher le nombre d'occurence et le tableu $resultat
echo "le nombre d'occurence de $test est : $resultats[0] <br>";
for ($i=0;$i<count($resultat);$i++){
    echo"$resultat[$i]";
}
