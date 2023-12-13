<?php

/**
 * 06 Exercice zip
 * 
 * Créez une fonction qui zip deux tableaux de même longueur terme à terme
 * 
 * Dans l'exemple ci-dessous le tableau renvoyé par la fonction affichera 
 * 
 * [ [1,5], [2, 6], [3, 7], [4, 8] ]
 * 
 */

 $numbers_01 = [1, 2, 3, 4];
 $numbers_02 = [5, 6, 7, 8];
 $number_zip=[];

 function zipCouple( array $array1, array $array2): array{
    foreach ($array1 as $key1 => $v1){
        foreach($array2 as $key2 => $v2){
            if($key1==$key2){
                $number_zip[]=[$v1,$v2];
                break;
            }
        }
     }
     return $number_zip;
 }
 // fonction qui fait la somme des valeures de chaque tableaux
 function zipSum( array $array1, array $array2): array{
    foreach ($array1 as $key1 => $v1){
        foreach($array2 as $key2 => $v2){
            if($key1==$key2){
                $sum=0;
                $number_zip[]=$sum=$v1+$v2;
                break;
            }
        }
     }
     return $number_zip;
 }
 $number_zipCouple=zipCouple($numbers_01,$numbers_02);
 $number_zipSum=zipSum($numbers_01,$numbers_02);
 print_r($number_zipCouple);
 print_r($number_zipSum);

