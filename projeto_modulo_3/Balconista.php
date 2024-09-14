<?php


class Balconista extends Funcionario {

    public function __construct($id, $nome, $idade, $endereco, $contato, $salario) {
        parent::__construct($id, $nome, $idade, $endereco, $contato, $salario);
    }

    public function falar(){
        echo "Oi, tudo bem? gostaria de agendar uma consulta ou comprar algum item?\n";
    }
}