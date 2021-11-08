<?php
$str = "La pipe du pape pi pue";
$char ="p";


function occurences($str,$char)
{
    $index = 0;
    $compteur = 0;
    while(isset($str[$index])){
        if($str[$index]== $char){
            $compteur = $compteur + 1;
        }
        $index = $index + 1;
    }
    echo $compteur;
    return $compteur;

}
occurences($str,$char);