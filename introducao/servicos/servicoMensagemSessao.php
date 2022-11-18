<?php
function setarMensagemErro(string $mensagem): void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}
function obterMensagemErro() : ?string //pode retornar uma string ou null
{
    if (isset($_SESSION['mensagem-de-erro'])) {
        return $_SESSION['mensagem-de-erro'];
    }
    return null;

}

function setarMensagemSucesso(string $mensagem): void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}
function obterMensagemSucesso() : ?string //pode retornar uma string ou null
{
    if (isset($_SESSION['mensagem-de-sucesso'])) {
        return $_SESSION['mensagem-de-sucesso'];
    }
    return null;

}

function removerMensagemErro() : void
{
    if (isset($_SESSION['mensagem-de-erro'])) {
        unset($_SESSION['mensagem-de-erro']); //podemos remover uma variável de um array de sessão
    }
}
function removerMensagemSucesso() : void
{
    if (isset($_SESSION['mensagem-de-sucesso'])) {
        unset($_SESSION['mensagem-de-sucesso']); //podemos remover uma variável de um array de sessão
    }
}
/*Serviço de mensagem de sessão
- temos setar a mensagem de erro para adicioná-la no array de sessão
- temos obter a mensagem de erro caso alguém queira consultá-la
- temos remover a mensagem de erro para removê-la do array de sessão
same pra mensagem de sucesso
*/
