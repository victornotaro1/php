<?php
class pessoa{
   private $nome;
   private $idade;
   private $altura;
   private $peso;


   public function __construct($nome, $idade, $altura, $peso)
   {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setAltura($altura);
    $this->setPeso($peso);
   }
   
   public function setNome($valorNome)
   {
   if (empty($valorNome)){
    $this->nome = 'nome';
   }else{$this->nome = $valorNome;}
   }

    public function getNome(){
    return $this->nome;}

    public function setIdade($valorIdade){
    if ($valorIdade < 0) {
    $this->idade = 0;}else{
        $this->idade = $valorIdade;}
    }
    public function getIdade(){
    return $this->idade;
   }
   public function setAltura($valorAltura){
   if ($valorAltura < 0){
   $this->altura = 0;}else{
   $this->altura = $valorAltura;}
   }
   public function getAltura(){
   return $this->altura;
   }
   public function setPeso($valorPeso){
   if ($valorPeso < 0){
    $this->peso = 0;}else{
    $this->peso = $valorPeso;}
   }
   public function getPeso(){
   return $this->peso;
  }
  public function calcularIMC(){
    $alturaMetros = $this->altura / 100;

    if ($alturaMetros > 0) {
    $imc = $this->peso / ($alturaMetros * $alturaMetros);
    return $imc;
    } else {
     return 0; 
     }
    }
    public function classificarIMC() {
        $imc = $this->calcularIMC();
    
        if ($imc < 18.5) {
            return "Abaixo do Peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            return "Peso Normal";
        } elseif ($imc >= 25.0 && $imc < 29.9) {
            return "Sobrepeso";
        } elseif ($imc >= 30.0 && $imc < 34.9) {
            return "Obesidade Grau I";
        } elseif ($imc >= 35.0 && $imc < 39.9) {
            return "Obesidade Grau II";
        } else {
            return "Obesidade Grau III";
        }
    }
}

$pessoa = new Pessoa("João", 30, 175, 75);

echo "Nome: {$pessoa->getNome()}\n";
echo "Idade: {$pessoa->getIdade()} anos\n";
echo "Altura: {$pessoa->getAltura()} cm\n";
echo "Peso: {$pessoa->getPeso()} kg\n";
echo "IMC:". $pessoa->calcularIMC();
echo "Classificação:" . $pessoa->classificarIMC();

