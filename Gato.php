<?php

require_once 'Animal.php';

class Gato extends Animal {

    public function falar(){
        echo "Eu sou um gatinho eu faço miau.\n";
    }

    public function __construct($nome, Humano $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho) {
        parent::__construct($nome, $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho,);
    }
}