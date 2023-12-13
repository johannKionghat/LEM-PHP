<!-- focntion calcule puissance -->

<?php
$nb=5;
$pow=2;

function powerNumber(int $nb, int $pow):int{
    $res=1;
    for ($i=0; $i <$pow ;$i++){
        $res*=$nb;
    }
    return $res;
}
$resultat=powerNumber($nb,$pow);
print("$nb^$pow = $resultat");