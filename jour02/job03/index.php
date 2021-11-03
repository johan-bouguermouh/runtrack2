<?php
$x = 1;
$y = "Laplateforme_";
while($x<=100){
    if(($x>=25)&&($x<=50)&&($x != 42)){
        echo "<i>$x</i>".'<br>';
    }
    elseif($x == 42){
        echo $y.'<br>';
    }
    else{
        echo $x . '<br>';
    }
    $x = $x + 1;
}


