<?php
$nombre=2; //Cette varaible nous permetra de compter de 2 à 1000
$diviseur=1; //Cette Variable sera tout le nombre par lequel nous diviserons le nombre
$compteur=0; //Cette variable fera le décompte du nombre de fois où la division aura un mudulo == 0

while($nombre<=1000){ //TANTQUE la variable est inferieur ou égal à 1000 :
    $nombre = $nombre + 1; // AlORS rajouter +1 à sa valeur
//**A l'interieur de se "décompte" nous inscrivons une seconde boucle */
    while($diviseur <= $nombre){ //& aussi TANTQUE notre DIVISEUR est inferieur ou égale à notre nombre appellé:
        if($nombre%$diviseur==0){ //Si notre NOMBRE qui est divisé par le DIVISEUR à un modulo égale à zero
            $compteur = $compteur + 1;//ALORS AJOUTER +1 au DIVISEUR
        } 
        $diviseur = $diviseur + 1; //DANS TOUT LES CAS rajouter une valeur de 1 au DIVISEUR et recommencer l'opération
    }
//**Une fois que tout les divisions ont était jouées, notre COMPTEUR n'a plus la même valeur*/
//**Sa valeur est à présent le nombre de fois où il a pue verifier que la division donner un modulo 0, soit ne comportant aucune décimal */
    if($compteur == 2){ //Nous lui demandons alors : SI le COMPTEUR est strictement égal à 2
        echo $nombre . '<br>'; //ALORS imprimer le NOMBRE associé à la séquence de la boucle en question
    }
    $diviseur=1; //Nous en profitons pour remmettre notre DIVISEUR à son décompte d'origine  pour s'assurer qu'il commence à diviser à paartir de 1
    $compteur=0; //Nous mettons notrre compteur à zero
    $nombre= $nombre + 1; //Nous rajoutons +1 à la valeurs de notre nombre afin qu'il débute un nouveau cycle de calcul avec le prochain nombre
} //On ferme la boucle afin qu'il la rejout
?>