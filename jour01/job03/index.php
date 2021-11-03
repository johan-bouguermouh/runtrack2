<?php
/** EXERCICE */

$string = "Prénom";// Nom > chaine de caractères
$int = 29; // Age > nombre entier
$float = 1.86; // Taille > nombre décimal
$bool = true; //booléen
$bool2 = false; //Booléen

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Tableau des variables</title>
</head>
<body>
    <head>
    <h1>Les variables primitives</h1>
    </head>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="Type">Chaine de caractères</th>
                    <th >String</th>
                    <th class="valeur"><?php echo $string?></th>
                </tr>
                <tr>
                    <th class="Type">Nombre entier</th>
                    <th>Integer</th>
                    <th class="valeur"><?php echo $int?></th>
                </tr>
                <tr>
                    <th class="Type">Nombre décimal</th>
                    <th>Float</th>
                    <th class="valeur"><?php echo $float?></th>
                </tr>
                <tr>
                    <th class="Type">Booléen</th>
                    <th>Booléans</th>
                    <th class="valeur"><?php echo $bool.' ou '.$bool2, 0?></th>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>