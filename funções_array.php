<?php

$alimentos = ['arroz', 'Feijão', 'batata', 'batata'];
$produtos= ['papel', 'lapis', 'lapizera'];

$alimentos [] = 'farinha';

//PARA ADICIONAR NO INICIO DO ARRAY
array_unshift($alimentos, 'salada');

//PARA NÃO TER DUPLICATAS
$alimentos = array_unique($alimentos);

//print_r($alimentos);

$produtos = [
    ["suco", 'frutas'],
    ['sorvete', 'feijão'],
    ['brocolis', 'lentilha']
];

$produtos_item = end($produtos);

print_r ($produtos_item);





/////////////////////////////////////////////////////////////////////////

//if(is_array ($alimentos)){
    //echo 'isso é um array';
//}else{
   //echo 'isso não é um array'; 
//}

//$todosArrays = array_merge($alimentos, $produtos);

//print_r($todosArrays);

?>