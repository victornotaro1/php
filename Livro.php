<?php
class livro{
    private $nome;
    private $autor;
    private $numeroPaginas;
    private $preco;


    public function __construct($nome, $autor, $numeroPaginas, $preco)
    {
        $this->setNome($nome);
        $this->setAutor($autor);
        $this->setNumeropag($numeroPaginas);
        $this->setPreco($preco);
    }
    public function setNome($valorNome){
    if($valorNome == ''){
    $this->nome = 'nome desconhecido';}else{
    $this->nome = $valorNome;}
    }
    public function getNome(){
     return $this->nome;}


     public function setAutor($valorAutor){
     if ($valorAutor == '') {
     $this->autor = 'Autor Desconhecido';}else{
     $this->autor = $valorAutor;}
    }
    public function getAutor(){
    return $this->autor;}

    public function setNumeropag($valorNumeroPag){
    if ($this->numeroPaginas < 0) {
    $this->numeroPaginas = 'Numero de Paginas Invalidas';}else{
    $this->numeroPaginas = $valorNumeroPag;
     }
    }
    public function getNumeropag(){
    return $this->numeroPaginas;
    }

    public function setPreco($valorPreco){
    if ($this->preco < 0){
    $this->preco = 'preco invalido';}else{
    $this->preco = $valorPreco;
      }
    }
    public function getPreco(){
    return $this->preco;
    }

    public function calcularValorPorPagina(){
    return $this->preco / $this->numeroPaginas;}

    public function desconto($valorDesconto){
    return ($this->preco / 100 * $valorDesconto);}
}

$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1000, 500);

echo "Título do Livro: {$livro->getNome()}<br>";
echo "Autor do Livro: {$livro->getAutor()}<br>";
echo "Número de Páginas: {$livro->getNumeropag()}<br>";
echo "Preço do Livro: R$ {$livro->getPreco()}<br>";
echo "o Preço de cada pagina sai por " . $livro->calcularValorPorPagina() . "<br>";
echo "o preco com desconto fica " . $livro->desconto (50) . "<br>";
