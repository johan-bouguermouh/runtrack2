<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    'voyelles' => ['O','a','e','i','o','u','y'],
    'consonnes' => ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z']
);
$n =0;//Parcours de la boucle initial
$i = 0; //Parcours l'index de ma string
$k = 0; //Parcour l'index de mon dictionnaire
$oc = 0; //ocurrence voyelle
$ov = 0;//occurence consonne
$sov = 0; //somme des occurences pour les voyelles
$soc = 0; //somme des occurences pour les voyelles


while(isset($dic['voyelles'][$n]))
{
    $i=0;
    while((isset($str[$i])))
    {
        if ($str[$i] == $dic['voyelles'][$k])
        {
            $ov++;
        }
        $i = $i + 1;
    }
    if ($ov > 0)
    {
        $sov += $ov;
        echo $dic['voyelles'][$k].'='. $ov.'<br>';
    }

    if($k<6)
    {
        $k= $k+1;
    }
    $ov = 0;
    $n = $n + 1;

}
$k = 0;
$n = 0;
$i = 0;
echo 'Somme des occurences de voyelles :'.$sov.'<br>';
while(isset($dic['consonnes'][$n]))
{
    $i=0;
    while((isset($str[$i])))
    {
        if ($str[$i] == $dic['consonnes'][$k])
        {
            $oc++;
        }
        $i = $i + 1;
    }
    if ($oc > 0)//Une occurence existe seulement si la llettre est présente deux fois minimum
    {
        $soc += $oc;
        echo $dic['consonnes'][$k].'='. $oc.'<br>';
    }

    if(isset($dic['consonnes'][$k]))
    {
        $k= $k+1;
    }
    $oc = 0;
    $n = $n + 1;

}
echo 'Somme des occurences de voyelles :'.$soc.'<br>';
?>
<html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03-Job05</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $sov ?></th>
                <th><?php echo $soc ?></th>
            </tr>
        </tbody>
    
</body>
</html>