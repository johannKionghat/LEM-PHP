<?php 
$a = 10;
$b = 5;
$c = 7;

function plusGrand($a,$b,$c){
$max = ($a >= $b && $a >= $c) ? $a : (($b >= $a && $b >= $c) ? $b : $c);
return $max;
}
$max=plusGrand($a,$b,$c);
echo"le plus grand est : $max";