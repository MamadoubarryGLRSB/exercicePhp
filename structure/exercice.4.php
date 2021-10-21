<?php
/**
 * ecrire un script qui genere une annee et un mois
 * puis determine et affiche le nombre de jour de ce mois dans cette année
 */
define("min_mois",1);
define("max_mois",20);
define("min_an",1800);
define("max_an",2021);
$an=rand(min_an,max_an);
$mois=rand(min_mois,max_mois);

if($mois==1){
    $jour=31;
}
elseif($mois==2){
    if(($an%100==0 && $an%400==0) || ($an%100!=0 && $an%4==0)){
        $jour=29;
    }
    else{
        $jour=28;
    }
}
elseif($mois==3){
    $jour=31;
}
elseif($mois==4){
    $jour=30;
}
elseif($mois==5){
    $jour=31;
}
elseif($mois==6){
    $jour=30;
}
elseif($mois==7){
    $jour=31;
}
elseif($mois==8){
    $jour=31;
}
elseif($mois==9){
    $jour=30;
}
elseif($mois==10){
    $jour=31;
}
elseif($mois==11){
    $jour=30;
}
elseif($mois==12){
    $jour=31;
}
else{
    $jour="indisponible";
}
print("$mois/$an : $jour jours");
?>
