<?php
//ASCI majuscule code de 65 à 90
//Si l'index 0 de str est un chre superieur ou égal à 65 && inferieur ou égale à 90 alors écrire en <g>

// $str = "Test";
// $str2 = 'c';
// /**GRAS */

//      if(($str[0] >= mb_chr(65)) && ($str[0] <= mb_chr(90))){
//          echo "<b>$str</b>";
//      }
//      else echo 'pas ok';
// /**CESAR */
// echo '== Alphabets ==' . PHP_EOL;
// $s = 'W';
// for ($n=0; $n<6; $n++) {
//     echo ++$s . PHP_EOL;
// }
$alph=array(
    'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
);
print_r($alph).'<br>';

echo '<br><br> --GRAS-- <br>';
$str= "test";
 if(($str[0] >= $alph[26])&&($str[0] <= $alph[51])){
     echo "<br><b>$str</b>";
 }
 else echo 'Non appliquer pas dans se cas';
/**test ok */
 echo '<br><br> --CESAR-- <br>';
//  if($str[0] == $alph[2]){
//      $str[0]=$alph[5];
//  }

//  echo $str;
/** Test avec boucle */
$i = 0 ;//key de $str
$key = 0;//key de $array
$n =2;
 while(isset($str[$i])){
   
     while($alph[$key] != $str[$i]){
         $key = $key + 1;
         //echo '<br>'.$alph[$key];
     }
     if($str[$i]==$alph[$key]){
         ($n = $key+$n);
         echo $alph[$n];
     }
     $key = 0;
     $n = 2;
    $i = $i + 1;
 }
?>