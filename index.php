<!DOCTYPE html>
<html>
    <head>
        <title>PREMIERE EXERCICE PHP</title>
</head>
<body>
 <?php
 
/*
$n1 = 20;
$n2 = 35;

echo $n1.' + '.$n2.' ='.$n1+$n;
*/

$nombrepiece = 337;
$bouteillecart = 6;
echo intval($nombrepiece/$bouteillecart).' cartons et '.$nombrepiece%$bouteillecart.'bouteilles';

 ?>
