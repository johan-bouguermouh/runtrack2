<?php
$x = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <header>
        <p>Afficher tous les nombres compris entre 0 et 1337 en mettant un
retour à la ligne entre chaque nombre. Le nombre 42 doit
être en gras et souligné</p>
    </header>
    <main>
  <?php
        while($x <= 1337){
    if($x == 42){
        echo "<b><u>$x</u></b>".'<br>';
    }
    else {
    echo $x . '<br>';
    }
    $x = $x + 1;
    }
 ?>
    </main>
    <footer>
        <p>Johan Bouguermouh - Runtrack2<p> 
    </footer>
</body>
</html>