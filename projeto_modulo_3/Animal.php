<?php

class Animal {

    public $id;
    public $nome;
    public $humano;
    public $raca;
    public $quantidadePatas;
    public $cor;
    public $peso;
    public $tamanho;

    public function __construct($id, $nome, $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho) {
        $this->id = $id;
        $this->nome = $nome;
        $this->humano = $humano;
        $this->raca = $raca;
        $this->quantidadePatas = $quantidadePatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
    }

    public function falar(){
        echo "Ainda não sei nenhum barulho, sou uma superclasse\n";
    }

    public function ordenarCompra(Produto $produto, $quantidade) {
        $total = $produto->preco * $quantidade;
        echo "Produto: $produto->nome || Quantidade: $quantidade | Total: R$ " . number_format($total, 2, ',', '.') . "\n";
    }

    public function __toString() {
        return "ID: $this->id, Nome: $this->nome, Humano: $this->humano, Raça: $this->raca, Patas: $this->quantidadePatas, Cor: $this->cor, Peso: $this->peso kg, Tamanho: $this->tamanho cm";
    }


}