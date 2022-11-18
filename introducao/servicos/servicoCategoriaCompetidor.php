<?php


function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    if(validaNome($nome) && validaIdade($idade)){
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($l = 0; $l < count($categorias); $l++) {
                if ($categorias[$l] == 'infantil') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$l]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade < 18) {
            for ($l = 0; $l < count($categorias); $l++) {
                if ($categorias[$l] == 'adolescente') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$l]);
                    return null;
                }
            }
        } else if ($idade >= 18 && $idade <= 59) {
            for ($l = 0; $l < count($categorias); $l++) {
                if ($categorias[$l] == 'adulto') {
        
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$l]);
                    return null;
                }
            }
        } else {
            for ($l = 0; $l < count($categorias); $l++) {
                if ($categorias[$l] == 'idoso') {
        
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$l]);
                    return null;
                }
            }
        }
    }else{
        removerMensagemSucesso(); //o segredo aqui é o método unset() que remove uma variável de um hashmap de sessão
        return obterMensagemErro(); // caso algum script que chame essa função tenha interesse em consultar essa mensagem de erro
    }

}
