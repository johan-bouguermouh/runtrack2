<?php
$serie = array (200,204,173,98,171,404,459);
//**Version initial */
// $key = 0;

// while($key <= 6){
//         if([$serie][$key]%2==1){
//             echo $serie[$key].' est impair'.'<br>';
//         }
//         else{
//             echo $serie[$key].' est pair'.'<br>';
//         }
//        $key = $key + 1;
// }
//**Après documentation */
foreach($serie as $element)
{
    if ($element%2==1){
        echo $element . ' est impair'.'<br>';
    }
    else{
        echo $element . ' est pair'.'<br>';
    }

}
   ?>