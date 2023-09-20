<?php

class Aluno {
    public $nome;
    public $presente;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->presente = 1;
    }

    public function marcarFalta() {
        $this->presente = 0;
    }

    public function marcarPresenca() {
        $this->presente = 1;
    }
}

$aluno1 = new Aluno("João");
$aluno2 = new Aluno("Maria");
$aluno3 = new Aluno("Pedro");
$aluno4 = new Aluno("Ana");
$aluno5 = new Aluno("Valdir");

$alunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5];

$totalPresentes = 0;
$totalFaltantes = 0;

echo "Lista de Alunos:";
foreach ($alunos as $aluno) {
    echo $aluno->nome . " ";
    if ($aluno->presente == 1) {
        echo "<strong> Presente</strong> </br>";
        $totalPresentes++;
    } else {
        echo "Faltante";
        $totalFaltantes++;
    }
}

echo "Total de Alunos Presentes: " . $totalPresentes . " </br>";
echo "Total de Alunos Faltantes: " . $totalFaltantes;
?>
