<?php

class Empregado{
   private $nome;
   private $sobrenome;
   private $setor;
   private $SalarioMensal;


   public function __construct($nome, $sobrenome,$setor, $SalarioMensal)
   {
    $this->setNome($nome);
    $this->setSobrenome($sobrenome);
    $this->setSetor($setor);
    $this->setSalarioMensal($SalarioMensal);
   }

   public function setNome($valorNome)
   {
    if (empty($valorNome)){
    $this->nome = "nome";
    }else{
    $this->nome = $valorNome;}
   }
   public function getNome(){
   return $this->nome;}

     
   public function setSobrenome($valorSobrenome){
   if (empty($valorSobrenome)){
    $this->sobrenome = 'Sobrenome';
    }else{
    $this->sobrenome = $valorSobrenome;
     }
   }
   public function getSobrenome(){
   return $this->sobrenome;
   }


   public function setSetor($valorSetor){
   if (empty($valorSetor)){
   $this->setor = 'setor';}else{
    $this->setor = $valorSetor;
    }
   }
   public function getSetor(){
   return $this->setor;}


   public function setSalarioMensal($valorSalario){
   if ($valorSalario < 0){
    $this->SalarioMensal = 'Nada encontrado';
     }else{
     $this->SalarioMensal = $valorSalario;}
    }
    public function getSalarioMensal(){
    return $this->SalarioMensal;}

    public function salarioAnual(){
    return $this->SalarioMensal * 12;}
}

$funcionario = new Empregado('Valdir', 'Junior', 'açougue',1980);

echo "o funcionario {$funcionario->getNome()} {$funcionario->getSobrenome()} que pertence ao setor {$funcionario->getSetor()} e tem o salario mensal de {$funcionario->getSalarioMensal()} e ganha anualmente " . $funcionario->salarioAnual();