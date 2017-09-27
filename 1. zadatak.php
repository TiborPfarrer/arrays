<?php
$lista = array(5,38,53,88,6,3,32,13,3);
$brojilo =1;
$b=1;
for ($i=0;$i<9;$i++)
{
    $a=$lista[$i];
    if ($a>$brojilo) {
        $brojilo=$a;
    }
}
echo "najveci broj je ",$brojilo;
?>