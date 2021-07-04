<?php
        $n = $_GET['num']; 
        if($n < 0) {
            echo  $n . ' Número Negativo' . '<br>';
        }
        else {
            echo $n . ' Número Positivo' . '<br>';
        }
        $p = $n / 2;
        if($p = 0) {
            echo $n . ' Número Par' . '<br>';
        }
        else {
            echo $n . ' Número Ímpar' . '<br>';
        }
?>