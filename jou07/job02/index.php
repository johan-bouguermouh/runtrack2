
<?php
$count=1;
setcookie(
    "nbvisites",
    $count,
   )
?>
<html>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="submit" name="reset">
        </form>
    </body>
    </html>
<?php
//**Condition de reset */
    if(isset($_POST['reset'])){
        echo 'COUCOU';
        // setcookie("nbvisites",, time()+3600);
        $_COOKIE['nbvisites'] = 1;
    }
    var_dump($_POST);
//**Décompte des cookies */
    
    if(isset($_COOKIE["nbvisites"])){
        setcookie("nbvisites",$_COOKIE["nbvisites"] +1, time()+3600);
    }
    var_dump($_COOKIE['nbvisites']);
    // else{
    //     $_SESSION['nbvisites']=0;
    // }
?>
