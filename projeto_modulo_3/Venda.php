<?php


class Venda{

public $id;
public $produtosVendidos = [];
public $vendedor;
public $totalVendas = 0;


    public function __construct($id,Vendedor $vendedor) {
        $this->id = $id;
        $this->vendedor = $vendedor;
    }

    public function registrarVenda(Produto $produto, $quantidade) {
        $this->produtosVendidos[] = ['produto' => $produto,'quantidade' => $quantidade,'total' => $produto->preco * $quantidade];
        $this->totalVendas += $produto->preco * $quantidade;
    }

    public function exibirVendas() {
        foreach ($this->produtosVendidos as $venda) {
            echo "ID venda: " . $this->id .
                 " | Produto: " . $venda['produto']->nome . 
                 " | Vendedor: " . $this->vendedor->nome . 
                 " | Quantidade: " . $venda['quantidade'] . 
                 " | Total: R$ " . number_format($venda['total'], 2, ',', '.') . "\n";
        }
        echo "Total geral das vendas: R$ " . number_format($this->totalVendas, 2, ',', '.') . "\n";
    }
}