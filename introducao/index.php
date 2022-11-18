<?php

session_start(); //estou mesclando o html com o php, mas não é uma boa prática
include 'servicos/servicoMensagemSessao.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">




</head>

<p>Formulário para inscrição de competidores</p>

<form action='script.php' method='post'> <!--esse arquivo irá recuperar qualquer informação que vier do post-->
    <?php
    if(isset($_SESSION['mensagem-de-erro'])){
        $mensagemDeErro = obterMensagemErro();
    }else{
        $mensagemDeErro = '';
    }
    if($mensagemDeErro != ''){
        echo $mensagemDeErro;
        $mensagemDeErro = '';
    }
    if(isset($_SESSION['mensagem-de-sucesso'])){
        $mensagemDeSucesso = obterMensagemSucesso();
    }else{
        $mensagemDeSucesso = '';
    }
    if($mensagemDeSucesso != ''){
        echo $mensagemDeSucesso;
        $mensagemDeSucesso = '';
    }
    ?>
    <p>Seu nome: <input type='text' name='nome'></p>
    <p>Sua idade: <input type='text' name='idade'></p>
    <p><input type='submit' value='Enviar dados do competidor'></p>
</form>

</body>

</html>
