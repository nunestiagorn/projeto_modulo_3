<?php

require_once 'Animal.php';

class Cachorro extends Animal {

    public function falar(){
        echo "Eu sou um cachorrorinho eu faço auau.\n";
    }

    public function __construct($id, $nome, Humano $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho) {
        parent::__construct($id, $nome, $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho,);
    }
}