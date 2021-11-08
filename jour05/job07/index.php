<?php
//ASCI majuscule code de 65 à 90
//Si l'index 1 de str est un chre superieur ou égal à 65 && inferieur ou égale à 90 alors écrire en <g>

$str = "Test";

     if(($str[0] >= mb_chr(65)) && ($str[0] <= mb_chr(90))){
         echo "<b>$str</b>";
     }
     else echo 'pas ok'
?>
