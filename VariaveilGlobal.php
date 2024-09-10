<?php
$variavelGlobal = 100;

function exibirVariavelGlobal(){
    global $variavelGlobal;
    //usando a palavra-chave global para acessar a variavel global
    echo "Variavel global: " . $variavelGlobal;
}

exibirVariavelGlobal();