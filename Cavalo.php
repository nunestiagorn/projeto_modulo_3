<?php

require_once 'Animal.php';

class Cavalo extends Animal {

    public function falar(){
        echo "Eu sou um cavalinho eu faço iiirrrrí, rilinchin.\n";
    }
    
    public function __construct($nome, Humano $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho) {
        parent::__construct($nome, $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho,);
    }
}