<?php

function validarUsuario(array $usuarios)
{
    if (empty($usuarios['codigo']) || empty($usuarios['nome']) || empty($usuarios['email'])) {
        return false;
    }
    return true;
}

$usuario = [

    'codigo' => 1,
    'nome' => '',
    'email' => 'artsoucor12@gmail.com'

];

$usuarioValido = validarUsuario($usuario);

if(!$usuarioValido){
    echo "Usuário inválido";
    return false;
}

echo "Essa linha não deve ser executada";



