<?php
declare(strict_types=1);


function validaNome(string $nome) : bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro('O nome deve conter mais de 3 caracteres');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro('O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade){
    if (!is_numeric($idade)) {
        setarMensagemErro('A idade deve ser um número');
        return false;
    }
    return true;
}
