<?php

function calcular($primeiro_numero, $segundo_numero, $operador){
    switch ($operador){
        case  '+':
        echo $primeiro_numero + $segundo_numero;
            break;

        case  '-':
            echo $primeiro_numero - $segundo_numero;
            break;

        case  '/':
            echo $primeiro_numero / $segundo_numero;
            break;

        case  '*':
            echo $primeiro_numero * $segundo_numero;
            break;

        default:

            break;
    };
};
$primeiro_numero = 30;
$segundo_numero = 20;
$operador = "*";

calcular($primeiro_numero, $segundo_numero, $operador);
?>