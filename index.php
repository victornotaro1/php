<?php


/*
Crie um programa usando funções que vai ajudar a unimar
a abrir salas de ADS para o próximo ano. 
Vamos precisar considerar o número de turmas, 
o número de salas, mesas por sala, um computador por aluno
e os custos, por sala e total.

Custo por computador: R$3000
Custo por mesa: R$500
Cada turma tem no máximo 50 alunos
As salas tem 5 colunas por 10 fileiras (se a turma encher)
Cada mesa cabem dois computadores (dois alunos).

A função principal deve retornar um array com outros
arrays internos (um por turma que abrir), mais as 
infos gerais de custo. Exemplo.

Alunos: 90
Retorno:
Array(
"custoTotal":x,
"salas":2,
"turmas":array(
    "alunos":50,
    "computadores:50,
    "mesas":25,
    "custo":x
    )
)

*/


function calcularSalasADS($numAlunos) {
    $numTurmas = ceil($numAlunos / 50);
    $numSalas = ceil($numTurmas / 2);
    $numMesasPorSala = $numSalas * 25;

    $custoPorComputador = 3000;
    $custoPorMesa = 500;
    
    $custoComputadoresPorTurma = $numAlunos * $custoPorComputador;
    $custoMesasPorSala = $numMesasPorSala * $custoPorMesa;
    
    $custoTotalPorTurma = $custoComputadoresPorTurma + $custoMesasPorSala;
    $custoTotal = $custoTotalPorTurma * $numTurmas;
    
    $turmapadrao = array(
        "alunos" => 50,
        "computadores" => 50,
        "mesas" => 25,
        "custo" => $custoTotalPorTurma
    );
    
    $turmasInfo = array_fill(0, $numTurmas, $turmapadrao);
    
    $infoGerais = array(
        "custoTotal" => $custoTotal,
        "salas" => $numSalas,
        "turmas" => $turmasInfo
    );
    
    return $infoGerais;
}

function formatarInfos($resultado) {
    $saidaFormatada = "custo Total: R$ {$resultado['custoTotal']}</br>";
    $saidaFormatada .= "numero de salas: {$resultado['salas']}</br>";

    foreach ($resultado['turmas'] as $i => $turma) {
        $saidaFormatada .= "Turma " . ($i + 1) . ":";
        $saidaFormatada .= "alunos: {$turma['alunos']}</br>";
        $saidaFormatada .= "computadores: {$turma['computadores']}</br>";
        $saidaFormatada .= "mesas: {$turma['mesas']}</br>";
        $saidaFormatada .= "custo: R$ {$turma['custo']}</br>";
    }
    
    return $saidaFormatada;
}

$numAlunos = 90;
$resultado = calcularSalasADS($numAlunos);
$saidaFormatada = formatarInfos($resultado);
echo $saidaFormatada;

?>
