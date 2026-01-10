<?php
$name ="augusto";

//echo $name;

/////////////////////ARRAY/////////////////////

$carros = ['Palio', 'jetta', 'gol'];

//echo $carros [0]



////////////////////////IF//////////////////////

$email = 'augustoneto@gmial.com';
$senha = 'senha123';

if($email != '' && $senha != ''){
    //echo 'cadastrado com sucesso';
}else{
    //echo 'algo deu errado, tente novamente';
}

$desconto = 1;

if($desconto < 20){
    //echo 'desconto de 10%';
}else{
    if($desconto >= 20){
        //echo 'desconto de 20%';
    }else{
       if ($desconto >= 9){
            //echo 'não tem desconto';
        };
    };
}

////////////////////////SWIFT////////////////////////////




?>