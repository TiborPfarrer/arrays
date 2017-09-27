<?php
$lista = array(5,3,3,8,6,3,3,1,5);
$brojilo =1;
$brojilo1 = 0;
$b=0;
sort($lista);
for ($i=0;$i<9;$i++) {
    $a = $lista[$i];
    while ($a == $b)
    {
        $brojilo++;
    }
    $b=$a;
    if ($brojilo>$brojilo1)
        $brojilo1=$brojilo;

}
echo "broj ponavljanja broja ",$brojilo1," puta";
?>