<?php


class Venda{

   public $produtos;
   public $humano;

   public function __construct($produtos, $humano) {
    $this->produtos = $produtos;
    $this->humano = $humano;
    }
}