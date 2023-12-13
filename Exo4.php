<?php
$tableau = range(0,9);

$sommePaire=0;
$sommeImpaire=0;
for ($i=0;$i< count($tableau);$i++ ){
    if ($i%2==0){
        $sommePaire +=$i;
    }else{
        $sommeImpaire +=$i;
    }
}
print("$sommePaire\n");
print($sommeImpaire);

//la fonction généralisée.

$tableau = range(0,9);

function sommePaireImpaire(array $tableau): array{
    $sommePaire=0;
    $sommeImpaire=0;
    $resultat=[];
    for ($i=0;$i< count($tableau);$i++ ){
        if ($i%2==0){
            $sommePaire +=$i;
        }else{
            $sommeImpaire +=$i;
        }
    }
    $resultat[]=["sommePaire"=>$sommePaire,"sommeImpaire"=>$sommeImpaire];
    return $resultat;
}
$resultats =sommePaireImpaire($tableau);
print_r($resultats);