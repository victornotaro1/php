<?php

class Aluno{
   private $aluno;
   private $RA;
   private $curso;
   private $disciplina;
   private $notaP1;
   private $notaP2;

   public function __construct($aluno, $RA, $curso, $disciplina, $notaP1, $notaP2)
   {
    $this->setAluno($aluno);
    $this->setRA($RA);
    $this->setCurso($curso);
    $this->setDisciplina($disciplina);
    $this->setNotaP1($notaP1);
    $this->setNotaP2($notaP2);
   }

  public function setAluno($valorNome){
  if (empty($valorNome)){
   $this->nome = 'Nome';
   } else {
   $this->nome = $valorNome;
   }
  }
  public function getAluno(){
  return $this->nome;}


  public function setRA($valorRA){
  if ($valorRA < 0){
   $this->RA = 'RA Ínvalido';
   } else {
   $this->RA = $valorRA;
   }
  }
  public function getRA(){
  return $this->RA;}


  public function setCurso($valorCurso){
  if (empty($valorCurso)){
  $this->curso = 'Curso';
   } else {
   $this->curso = $valorCurso; 
   }
  }
  public function getCurso(){
  return $this->curso;}


  public function setDisciplina($valorDisciplina){
  if (empty($valorDisciplina)){
  $this->disciplina = 'disciplina';} else {
   $this->disciplina = $valorDisciplina;
   }
  }
  public function getDisciplina(){
  return $this->disciplina;}

  public function setNotaP1($valorP1){
  if ($valorP1 < 0){
   $this->notaP1 = 'nota Invalida';} else {
   $this->notaP1 = $valorP1;
   }
  }
  public function getNotaP1(){
  return $this->notaP1;}

  
  public function setNotaP2($valorP2){
    if ($valorP2 < 0){
     $this->notaP2 = 'nota Invalida';} else {
     $this->notaP2 = $valorP2;
     }
    }
    public function getNotaP2(){
    return $this->notaP2;}

    public function calcularMedia (){
    $media = $this->notaP1 + $this->notaP2 / 2;
    if ($media >= 7) {Return "Aprovado";}
    elseif ($media >= 5) {Return "exame";}
    else {Return "Reprovado";}
    }
    
}

$Victor = new Aluno('Victor', 1970055, 'ads', 'POO', 5, 3);

echo "o aluno {$Victor->getAluno()} Portador do RA {$Victor->getRA()} que pertence ao Curso {$Victor->getCurso()} e da disciplina {$Victor->getDisciplina()} tirou na P1 {$Victor->getNotaP1()} e na P2 {$Victor->getNotaP2()} e foi " . $Victor->calcularMedia();