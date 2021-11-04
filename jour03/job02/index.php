<?php

$str="Tous ces instants
seront perdus dans le temps comme les larmes sous la pluie";
//  echo strlen($str) . '<br>';//77 caractère
$caractère=1;

 while($caractère<=77){
     if($caractère%2)
     {
         $str[$caractère] = ' ';
     }
     $caractère = $caractère + 1;
 }
  echo $str ;