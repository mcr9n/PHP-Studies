<?php

function validarUsuario(array $usuarios)
{
    if (empty($usuarios['codigo']) || empty($usuarios['nome']) || empty($usuarios['email'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos");
    }
    return true;
}

$usuario = [

    'codigo' => 1,
    'nome' => '',
    'email' => 'artsoucor12@gmail.com'

];
$status = false;
try{
    $status = validarUsuario($usuario);
}catch(Exception $e){
    echo $e->getMessage();
}finally{
     echo PHP_EOL;
     echo "Status da operação: " . (int) $status;
     die();

}

// echo PHP_EOL;
// echo "Essa linha não deve ser executada";

//o Status nos ajuda a acompanhar logs e o fluxo de execução da nossa aplicação



