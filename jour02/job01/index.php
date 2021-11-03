<?php
$x = 0;
while($x <= 1337){
    if($x == 42){
        echo "<b><u>$x</u></b>".'<br>';
    }
    else {
    echo $x . '<br>';
    }
    $x = $x + 1;
}