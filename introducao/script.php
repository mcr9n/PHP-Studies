<?php
session_start();
include 'servicos/servicoMensagemSessao.php';
include 'servicos/servicoValidacao.php';
include 'servicos/servicoCategoriaCompetidor.php';
//o script.php deve ser responsável por lidar com os serviços
//o hashmap post foi construído pelo formulário
$nome = $_POST['nome']; //esse arquivo irá recuperar qualquer informação que vier do post
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');