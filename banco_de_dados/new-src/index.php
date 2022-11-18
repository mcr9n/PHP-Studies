<?php

require "Produto.php";

$produto = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        echo '<h3>Produtos: </h3>';

        foreach ($produtos->list() as $key => $value) {
            echo 'ID: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;
    case 'inserir':
        $status = $produto->insert($_GET['descricao']);
        if (!$status) {
            echo '<h3>Erro ao inserir produto</h3>';
            return false;
        } else {
            echo '<h3>Registro inserido com sucesso</h3>';
        }
        break;
    case 'atualizar':
        $status = $produto->update($_GET['descricao'], $_GET['id']);
        if (!$status) {
            echo '<h3>Erro ao atualizar produto</h3>';
            return false;
        } else {
            echo '<h3>Registro atualizado com sucesso</h3>';
        }
        break;
    case 'deletar':
        $status = $produto->delete($_GET['id']);
        if (!$status){
            echo '<h3>Error ao deletar produto</h3>';
            return false;
        }else{
            echo '<h3>Registro deletado com sucesso</h3>';
        }
        break;
}
