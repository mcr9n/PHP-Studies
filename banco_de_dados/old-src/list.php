<?php
//Listagem de dados com o PDO

declare(strict_types = 1);

$pdo = require 'connect.php'; //Dentro da variável pdo, eu tenho minha conexão com o banco de dados.
$sql = 'SELECT * FROM produtos'; //Aqui eu estou selecionando todos os dados da tabela produtos.

echo '<h3>Produtos: </h3>';

foreach($pdo->query($sql) as $key => $value){
    echo 'ID: ' . $value['id'] . '<br> Descrição: '. $value['descricao'] . '<hr>';
}
//Aqui eu tenho a verdadeira listagem
//query é um método da classe PDO que pode ser realizado sobre a conexão passando a string sql
//foreach pq o método query retorna um array de arrays
//A minha tabela do banco de dados tem apenas id e descrição.
