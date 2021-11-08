<?php
$str ="I'm sorry Dave I'm afraid I can't
do that";
$voyelles = "aeiouyI";
$caractere = 0 ;

// var_dump($voyelles);
//strlen($str); //42

while( isset ($str[$caractere]) == true)
{   
    $serie = 0 ;
    while(isset ($voyelles[$serie]) == true)
    {
        if($str[$caractere]==$voyelles[$serie])
        {
            echo $str[$caractere];
        }
            $serie = $serie + 1;

    }
$caractere = $caractere + 1;
}
