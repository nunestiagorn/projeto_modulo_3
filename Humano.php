<?php

class Humano {

    public $id;
    public $nome;
    public $idade;
    public $endereco;
    public $contato;

    public function __construct($id, $nome, $idade, $endereco, $contato) {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }


}