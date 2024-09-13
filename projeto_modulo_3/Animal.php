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
}