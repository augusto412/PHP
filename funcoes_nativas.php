<?php

//TRTANFORMA NUMEROS NEGATIVOS EM PSOTIVOS
$nota = '-5';
//$nova_nota = abs ($nota);
//echo $nova_nota;


//PARA ARENDONDAR PARA O INTEIRO MAIOR 
$nota = 5.4;
//$nova_nota = ceil($nota);
//echo $nova_nota

//ARENDODA PARA O INTEIRO MENOR
$nota = 9.8;
//$nova_nota = floor($nota);
//echo $nova_nota

$numero_aleatorio = rand(0, 100);
//echo $numero_aleatorio;

////////////////////////FUNÇÕES DE LINGUAGEM///////////////////////////////

//PARA CHIGAMENRTOS
$mensagem_chat = 'quero que você se ';

if (strpos ($mensagem_chat, 'lasque') != ""){
    echo 'por favor, retire palavras de odio da mensagem';
}else{
    echo ' mensagem enviada com sucesso';
};

$nome = 'augusto neto';
$nome = explode(' ', $nome);


$nome = ' augusto pedro de sousa neto ';
$nome = ltrim ($nome);
$nome = rtrim ($nome);
echo  strlen($nome);
?>