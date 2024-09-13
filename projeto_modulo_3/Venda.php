<?php


class Venda{

public $id;
public $produtos;
public $humano;

public function __construct($id, $produtos, $humano) {
    $this->id = $id;
    $this->produtos = $produtos;
    $this->humano = $humano;
    }
}