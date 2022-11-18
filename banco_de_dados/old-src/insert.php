<?php

declare(strict_types = 1);

$pdo = require 'connect.php';
$sql = 'INSERT INTO produtos (descricao) VALUES (?)';

$prepare = $pdo -> prepare($sql); //aqui criamos um statement -> um estado antes de fazer atribuicao de valor pra esse produto.


$prepare -> bindParam(1, $_GET['descricao']); //fazemos a atribuição apartir do método bindParam
//estou recebendo o valor de descricao pelo get
$prepare -> execute(); //com o método execute da classe pdo executamos de fato essa query


echo $prepare -> rowCount(); //número de linhas afetadas pela query