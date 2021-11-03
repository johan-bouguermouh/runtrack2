<?php
$nombre=2;
$quotient=1;
$compteur=0;

while($nombre<=1000){
    $nombre = $nombre + 1;
    while($quotient <= $nombre){
        if($nombre%$quotient==0){
            $compteur = $compteur + 1;
        }
        $quotient = $quotient + 1;
    }
    if($compteur == 2){
        echo $nombre . '<br>';
    }
    $quotient=1;
    $compteur=0;
    $nombre= $nombre + 1;
}
