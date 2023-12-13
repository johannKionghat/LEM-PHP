<?php
$numbers = [19, 10, 7, 6, 8, 81, 0, 11, 4];
$max=0;
for ($i=0; $i < count($numbers); $i++){ 
    if ($numbers[$i]>$max){
        $max=$numbers[$i];
    }
}
echo"le plus grand est : $max";