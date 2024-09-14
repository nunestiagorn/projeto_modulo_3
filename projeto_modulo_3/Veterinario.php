<?php


class Veterinario extends Funcionario {
    private $especialidade;

    public function __construct($id, $nome, $idade, $endereco, $contato, $salario) {
        parent::__construct($id, $nome, $idade, $endereco, $contato, $salario);
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function falar(){
        echo "Eu sou um veterinário\n";
    }
}