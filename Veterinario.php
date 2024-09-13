<?php


class Veterinario extends Funcionario {

    public function __construct($id, $nome, $idade, $endereco, $contato, $salario) {
        parent::__construct($id, $nome, $idade, $endereco, $contato, $salario);
    }
}