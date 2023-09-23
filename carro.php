<?php
// <!-- • Crie uma classe Carro que tenha os atributos:
// • Marca
// • Modelo
// • Capacidade do tanque
// • Quilômetros por litro (consumo)
// • Sua classe deve ter os métodos getters e setters para cada atributo. Cada método deve seguir a
// regra:
// • Se o valor informado for negativo, deve ser inserido 0 no lugar, para número
// • Se o valor informado for vazio, deve ser inserido ‘Marca’ ou ‘Modelo’ no lugar, para strings
// • A classe também deve ter os métodos:
// • abastecer() que recebe por parâmetro o preço do combustível e retorna o valor total para encher o tanque do
// carro. Só é possível encher o tanque do carro.
// • autonomia() que retorna a autonomia total do carro, ou seja, quantos quilômetros o carro anda com um
// tanque cheio.
// • Usar get, set e __construct() -->
class Carro{
    private $marca;
    private $modelo;
    private $CapacidadeDoTanque;
    private $consumo;

    public function __construct($marca, $modelo, $CapacidadeDoTanque, $consumo, $preco)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setCapacidade($CapacidadeDoTanque);
        $this->setConsumo($consumo);
    }
    public function setMarca($valorMarca){
        if (empty($valorNome)) {
            $this->marca = $valorMarca;
        } else {
            $this->marca = $valorMarca;
        }
    }
    public function getMarca(){
    return $this->marca;
}
    public function setModelo($valorModelo)
    {
    if(empty($valorModelo)){
    $this->modelo = $valorModelo;
    } else {
      $this->modelo = $valorModelo;
    }
    }
    public function getModelo(){
    return $this->modelo;}

    public function setCapacidade($valorCapacidade)
    {
        if($valorCapacidade < 0)
        {
        $this->CapacidadeDoTanque = 0;
        } else {
        $this->CapacidadeDoTanque = $valorCapacidade;
    }
    }
    public function getCapacidade(){
      return $this->CapacidadeDoTanque;
    }
    public function setConsumo($valorConsumo)
    {
        if ($valorConsumo < 0)
        {
            $this->consumo = 0;
        } else {
        $this->consumo = $valorConsumo;
    }
    }
    public function getConsumo(){
      return $this->consumo;
    }

    public function abastecer($precoGasolina)
    {
     return $precoGasolina * $this->CapacidadeDoTanque;
    }
    public function autonomia(){
       return $this->consumo * $this->CapacidadeDoTanque;
    }
}

$carro = new Carro("toyota", "corolla", 70, 7, 5.40);

echo "o carro da marca {$carro->getMarca()} modelo {$carro->getModelo()} que tem a capacidade de {$carro->getCapacidade()}L e consome {$carro->getConsumo()}L por KM,e tem uma autonomia de {$carro->autonomia()} e o tanque completo fica por" . $carro->abastecer (5.40) . "reais";