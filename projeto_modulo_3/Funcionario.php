<?php

class Funcionario extends Humano {

public $salario;


    public function __construct($id, $nome, $idade, $endereco, $contato, $salario) {
        parent::__construct($id, $nome, $idade, $endereco, $contato );
        $this->salario = $salario;
    }


}