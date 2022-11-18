<?php

declare(strict_types = 1);

class ContaBancaria{
    
    private $numeroConta;
    private $saldo;
    private $numeroAgencia;
    private $nomeTitular;
    private $banco;

    public function obterSaldo(){
        return "Seu saldo atual é " . $this->saldo;
    }
    public function __construct($numeroConta, $saldo, $numeroAgencia, $nomeTitular, $banco){
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->numeroAgencia = $numeroAgencia;
        $this->nomeTitular = $nomeTitular;
        $this->banco = $banco;
    }
    public function depositar($valor){
        $this->saldo += $valor;
        return "Depósito de R$ $valor realizado com sucesso!";
    }
    public function sacar($valor){
        $this->saldo -= $valor;
        return "Saque de R$ $valor realizado com sucesso!";
    }
    


}

$conta = new ContaBancaria(
    $numeroConta = 123456,
    $saldo = 1000,
    $numeroAgencia = 123,
    $nomeTitular = "João",
    $banco = "Banco do Brasil"
);

echo $conta -> obterSaldo();

echo PHP_EOL;

echo $conta -> depositar(300);

echo PHP_EOL;

echo $conta -> obterSaldo();

echo PHP_EOL;

echo $conta -> sacar(300);

echo PHP_EOL;

echo $conta -> obterSaldo();






//propriedades e atributos são a mesma coisa
//o modificador de acesso precisa ser declarado
//public posso acessar qualquer elemento de fora da classe