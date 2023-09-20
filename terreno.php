<?php
class Terreno {
    public $frente;
    public $lateral;
    public $precoPorMetroQuadrado;

    public function setFrente($valor) {
        if ($valor < 0) {
            $this->frente = 0;
        } else {
            $this->frente = $valor;
        }
    }

    public function setLateral($valor) {
        if ($valor < 0) {
            $this->lateral = 0;
        } else {
            $this->lateral = $valor;
        }
    }

    public function setPreco($valor) {
        if ($valor < 0) {
            $this->precoPorMetroQuadrado = 0;
        } else {
            $this->precoPorMetroQuadrado = $valor;
        }
    }

    public function perimetro() {
        return 2 * ($this->frente + $this->lateral);
    }

    public function area() {
        return $this->frente * $this->lateral;
    }

    public function precoVenda() {
        return $this->area() * $this->precoPorMetroQuadrado;
    }
}

    $terreno = new terreno();
    $terreno->setFrente(16);
    $terreno->setLateral(10);
    $terreno->setPreco(100);

    $perimetro = $terreno->perimetro();
    echo "o perimetro é:" . $perimetro;

    $area = $terreno->area();
    echo "<br>a área é:" . $area;

    $precoVenda = $terreno->precoVenda();
    echo "<br>o preço é:". $precoVenda;