<?php

declare(strict_types=1);

class Produto
{
    private $conexao; //variável do tipo PDO

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=exemplo', 'root', 'arthur32537420');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() : array
    {
        $sql = 'SELECT * FROM produtos'; //Aqui eu estou selecionando todos os dados da tabela produtos.
        $produtos = [];
        //a query sql vai retornar um array de arrays
        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($produtos, $value);
        }
        return $produtos;
    }
    public function insert(string $descricao) : int
    {
        $sql = 'INSERT INTO produtos (descricao) VALUES (?)';

        $prepare = $this->conexao->prepare($sql); //aqui criamos um statement -> um estado antes de fazer atribuicao de valor pra esse produto.


        $prepare->bindParam(1, $descricao); //fazemos a atribuição apartir do método bindParam
        //estou recebendo o valor de descricao pelo get
        $prepare->execute(); //com o método execute da classe pdo executamos de fato essa query


        return $prepare->rowCount();
    }
    public function update(string $descricao, int $id) : int
    {
        $sql = 'update produtos set descricao = ? WHERE id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id) : int
    {
        $sql = 'delete from produtos where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1,$id);


        $prepare->execute();

        return $prepare->rowCount();
    }
}
