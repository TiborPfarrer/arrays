<?php
$rijeke = array("sava","drava","dunav");
$rijeke2 = array("kupa","una","dobra");
$rijekeuk=array_merge($rijeke,$rijeke2);
for ($i=0;$i<6;$i++)
    echo $rijekeuk[$i], " ";

$lista = array(5,38,53,88,6,3,32,13,3);
sort($lista);
for ($j=0;$j<9;$j++)
    echo $lista[$j], " ";
?>