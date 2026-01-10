<?php
$metodos_de_pagamento = 'boleto';

switch($metodos_de_pagamento){
    case 'cartão_credito':
        echo 'fazer integração com cartão de credito';
        break;
    case 'boleto':
        echo 'gerar o envio de boleto por e-mail';
        break;
    
    default:
    echo 'por favor, escolha um metodo de pagamento';
    break;
}

?>