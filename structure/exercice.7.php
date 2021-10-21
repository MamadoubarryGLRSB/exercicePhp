<?php
/**
 * ecrire un script qui genere 3 nombres 
 * puis les tries dans l'ordre croissant et apres dans l'ordre decroissant
 */
define("Min",-100);
define("Max",100);
$entier_1=rand(Min,Max);
$entier_2=rand(Min,Max);
$entier_3=rand(Min,Max);
if($entier_1>=$entier_2 &&  $entier_1>=$entier_3){
    $premier=$entier_1;
    if($entier_2>=$entier_3){
        $deuxieme=$entier_2;
        $troisieme=$entier_3;
    }
    else{
        $deuxieme=$entier_3;
        $troisieme=$entier_2;
    }
}
elseif($entier_2>=$entier_1 &&  $entier_2>=$entier_3){
    $premier=$entier_2;
    if($entier_1>=$entier_3){
        $deuxieme=$entier_1;
        $troisieme=$entier_3;
    }
    else{
        $deuxieme=$entier_3;
        $troisieme=$entier_1;
    }
}
else{
    $premier=$entier_3;
    if($entier_1>=$entier_3){
        $deuxieme=$entier_1;
        $troisieme=$entier_2;
    }
    else{
        $deuxieme=$entier_2;
        $troisieme=$entier_1;
    }
}
echo(" avant tri : $entier_1, $entier_2, $entier_3 <br>");
echo("orde décroissante : $premier, $deuxieme, $troisieme<br>");
echo("ordre croissante : $troisieme, $deuxieme, $premier");

?>