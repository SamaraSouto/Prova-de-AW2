<?php

$n =  $_POST["n"];
$k =  $_POST["k"];

$array = [$n, $k];
$i = 0;
$aux = 0;

   while($i < $array[1]) {
    echo " ";
    $aux = $n * $i;
    echo $aux;
    $i++;

    $aux = 0;
}

?>