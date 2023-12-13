<?php

function dump($results)
{
    echo '<pre>';
    print_r($results);
    echo '</pre>';
}

/**
* Boolean
*/
/*
*  Exercise quelle valeur de boolean retourne les expressions suivantes
*/

dump('test logique');

$exp1 = (0!= 0 && 1/0 == 2) ; //false   
dump($exp1? 'exp1 vrai' : 'exp1 faux');

$exp2 = (!true || true) ;//true
dump($exp2? 'exp2 vrai' : 'exp2 faux');

$exp3 = (!true || false) ;//false
dump($exp3? 'exp3 vrai' : 'exp3 faux');

$exp4 = !(true || true) ;//false
dump($exp4? 'exp4 vrai' : 'exp4 faux');

$exp5 = (true || false) && false;//false
dump($exp5? 'exp5 vrai' : 'exp5 faux');

$exp6 = (true || false) && true;//true
dump($exp6? 'exp6 vrai' : 'exp6 faux');

$exp7 = (true || false) && ( (!false && true) || true ); //true
dump($exp7? 'exp7 vrai' : 'exp7 faux');

$exp8 = ((false || false) && (!false && false)) || true ;//true
dump($exp8? 'exp8 vrai' : 'exp8 faux');

$exp9 = (false || false) && (!false && false) || true ;//true
dump($exp9? 'exp9 vrai' : 'exp9 faux');

$exp10 = 3*3.5 > 10 ;//true
$exp11 = 3*7  == 21 ;//true
$exp12 = 3-1 >= 1;//false
$exp13 = 0 < pow(2,10) == pow(2,10);//true
$exp14 = !(!true);//true
$exp15 = (5.5*2 == 11 || 1/2 != .5) && (3%2 == 0);
$exp16 = (5.5*2 == 11 || 1/2 != .5) && (3%2 != 0);