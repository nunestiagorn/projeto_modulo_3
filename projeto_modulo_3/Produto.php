<?php


class Produto{

    public $id;
    public $nome;
    public $preco;
    
    public function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public static function cadastrarProduto($id, $nome, $preco) {
        $novoProduto = new Produto($id, $nome, $preco);
        return $novoProduto;
    }
    
}