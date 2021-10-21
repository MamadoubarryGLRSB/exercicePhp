<?php
/**
 * ecrre un cript qui genere un mois un jour un mois et uen annee
 * puis verifie si la date generait est valide
 */
define("min_mois",1);
define("max_mois",20);
define("min_an",1800);
define("max_an",2021);
define("min_jour",1);
define("max_jour",50);
$an=rand(min_an,max_an);
$mois=rand(min_mois,max_mois);
$jour=rand(min_jour,max_jour);

if($mois==1){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==2){
    if(($an%100==0 && $an%400==0) || ($an%100!=0 && $an%4==0)){
        if($jour<=29){
            echo("la date $jour/$mois/$an est valide");
        }
        else{
            echo("la date $jour/$mois/$an est non valide");
        }
    }
    else{
        if($jour<=28){
            echo("la date $jour/$mois/$an est valide");
        }
        else{
            echo("la date $jour/$mois/$an est non valide");
        }
    }
}
elseif($mois==3){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==4){
    if($jour<=30){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==5){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==6){
    if($jour<=30){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==7){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==8){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==9){
    if($jour<=30){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==10){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==11){
    if($jour<=30){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
elseif($mois==12){
    if($jour<=31){
        echo("la date $jour/$mois/$an est valide");
    }
    else{
        echo("la date $jour/$mois/$an est non valide");
    }
}
else{
    echo("la date $jour/$mois/$an est non valide");
}
?>