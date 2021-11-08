
<?php
$a= 2;
$b= 3;
$operation="*";

function calcule($a, $operation,$b)
{
    if($operation == "+"){
        return($a + $b);
    }
    elseif($operation == "-"){
        return($a - $b);
    }
    elseif($operation == "*"){
        return($a * $b);
    }
    elseif($operation == "/"){
        return($a / $b);
    }
    elseif($operation == "%"){
        return($a % $b);
    }


}
echo calcule($a,$operation,$b)
?>