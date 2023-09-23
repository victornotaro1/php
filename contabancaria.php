<?php

class contabancaria{
    private $nome;
    private $saldo;


    public function __construct($nome, $saldo)
    {
        $this->setNome($nome);
        $this->setSaldo($saldo);
    }
    public function setNome($nomeTitular)
    {
    if (empty($nomeTitular)){
    $this->nome;
    }else{
    $this->nome = $nomeTitular;}
    }
    public function getNome(){
    return $this->nome;}

    public function setSaldo($SaldoBancario)
    {
     if ($SaldoBancario < 0){
    $this->saldo = 0;
     } else{
    $this->saldo=$SaldoBancario;
    }
    }
    public function getSaldo()
    { return $this->saldo;
    }
    public function depositar($valorDeposito){
    return $this->saldo = $valorDeposito;
    }
    public function sacar($valorSaque) {
        if ($this->saldo >= $valorSaque) {
            $this->saldo -= $valorSaque;
        } else {
            echo "Saldo insuficiente para o saque.";
        }
    }
    public function saldoAtual($saldoAtual)
    {
    return $saldoAtual = $this->saldo;
    }
    
}

$joao = new contabancaria("pedro", 500);

$joao->depositar(320);
$joao->sacar(20);

echo "a conta do titular {$joao->getNome()} tem um saldo atual de {$joao->getSaldo()}";
