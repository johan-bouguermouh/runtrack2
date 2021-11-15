<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$n =strlen("$str");//Compte le nombre de Key dans la string
For($i=1;$i<=$n;$i++)//Créer un tableau qui incrément l'index jusqu'à la somme total de $n,
{
    $val= $str[-$i];//Afficher la valeur de l'index de $str en partant du dernière index
   echo $val;
}