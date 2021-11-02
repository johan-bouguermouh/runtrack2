<?php
/** EXERCICE */

$string = "Prénom";// Nom > chaine de caractères
$int = 29; // Age > nombre entier
$float = 1.86; // Taille > nombre décimal
$bool = true; //booléen

echo "$string <br> Age : $int <br> Taille : $float <br> Vérifié : $bool";
/** INITIATIVE TABLEAU */

$indentité = array (
 "prénom" =>  array ("a" => "johan", "b" => "damien", "c" => "max"),
 "age" => array ("a" => 29, "b" => 35, "c" => 22),
 "taille" => array ("a" => 1.86,"b" => 1.81,"c" => 1.78)
);

$id = array (
    "Perso1" => array ("prénom" => "Johan", "age" => 29, "taille" => 1.86),
    "Perso2" => array ("prénom" => "Damien", "age" => 35, "taille" => 1.80),
    "Perso3"=> array ("prénom" => "Max", "age" => 35, "taille" => 1.78),
);
echo "<br>";

for ($i = 1; $i <= 3; $i++)
var_dump($id["Perso".$i]["taille"]);


// var_dump($id["Perso1"]["taille"]);
// var_dump($id["Perso2"]["taille"]);
// var_dump($id["Perso3"]["taille"]);


// $tab = [
//     "personne1"  => ["tom", 29, 1.86, 'Mec ', 'titi'],

//     "personne2"  => ["thomas", 28, 1.86],

//     "personne3" => ["titi", 30, 1.86],
// ];


// var_dump($tab["personne1"]);

// for ($i = 0; $i < count($tab['personne1']); $i++)
// {
//     echo ($tab['personne1'][$i]);
// }

// echo ('<br>');

// for ($i = 0; $i < count($tab['personne2']); $i++)
// {
//     echo ($tab['personne2'][$i]);
// }


// $fruits = array (
//     "indentité"  => array($Prénom => "Johan", "b" => "Damien", "c" => "Max"),
//     "ages" => array(1, 2, 3, 4, 5, 6),
//     "holes"   => array("first", 5 => "second", "third")
// );
// echo($indentité["prénom"]["a"]);

?>

<!-- fonction x ($nom) (


) -->