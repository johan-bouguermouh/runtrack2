<?php
 $str = "Certaines choses changent, et d'autres ne changeront jamais.";
 $n =strlen("$str");//Compte le nombre de Key dans la string
For($i=0;$i<=$n-1;$i++)//Créer un tableau qui incrément l'index jusqu'à la somme total de $n,
{   
    $u= $i+1;
    if($u == 60){
        $u = 0;
    }
    $val= $str[$u];//Afficher la valeur de l'index de $str en partant du dernière index
   echo $val;
}
