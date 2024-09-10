<?php

function calcularFatorial($n){
    if($n <=1){
        return 1;
    }else{
        return $n * calcularFatorial($n - 1);
    }
}

$num = 3;
$resultado = calcularFatorial($num);
echo "o Fatorial de $num é $resultado";