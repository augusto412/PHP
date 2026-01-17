<?php

function login($email, $senha, $emailCerto, $senhaCerta){
if($email === $emailCerto && $senha === $senhaCerta){
    return true;
}else{
    return false;
}
}

$email = 'augusto1020@gmail.com';
$senha = 'pedro1020';

$emailCerto = 'pedro123@gmail.com';
$senhaCerta = 'pedro1020';

$resultado_login = login($email, $senha, $emailCerto, $senhaCerta);

if($resultado_login == true){
    echo 'login efetuado com sucesso!';
}else{
    echo 'Email e/ou senha invalidos, tente novamente!';
}

?>