<?php

$str="Tous ces instants
seront perdus dans le temps comme les larmes sous la pluie";
//  echo strlen($str) . '<br>';//77 caractère
$caractère=1;
$bool= false;

 while($caractère<=77){
     if($caractère%2==0)
     {
        echo $str[$caractère];
     }

     $caractère = $caractère + 1;
 }
?>