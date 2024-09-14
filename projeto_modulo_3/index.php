<?php   

require_once 'Animal.php';
require_once 'Cachorro.php';
require_once 'Gato.php';
require_once 'Cavalo.php';

require_once 'Humano.php';
require_once 'Funcionario.php';
require_once 'Balconista.php';
require_once 'Vendedor.php';
require_once 'Veterinario.php';

require_once 'Produto.php';
require_once 'Venda.php';


// Versão 1.0 do Projeto, foram somente instânciada as Classes e usados os métodos, aparece tudo direto no terminal seguindo os comentários no código.


// Área de produtos pré-cadastrados

$listaProdutos;

//instâncias da classe Produto com seus parâmetros do construtor - $id, $nome, $preco

$listaProdutos[] = $produto1 = new Produto(uniqid(), "Anti-inflamatório - 20 MG", 59.00);

$listaProdutos[] = $produto2 = new Produto(uniqid(), "Multivitamínico - 60 tabletes", 99.90);

$listaProdutos[] = $produto3 = new Produto(uniqid(), "Desodorante Antipulgas Mon Ami - 200 ml", 48,99);

$listaProdutos[] = $produto4 = new Produto(uniqid(), "Shampoo Dermatológico Virbac - 500 ml", 45.90);

$listaProdutos[] = $produto5 = new Produto(uniqid(), "Suplemento Cavalo Forte Super Premium - 1kg", 297.00);

$listaProdutos[] = $produto6 = new Produto(uniqid(), "Ração - 3kg", 80.00);

//instância de Vendedor com seus parâmetros do construtor - $id, $nome, $idade, $endereco, $contato, $salario


$vendedor = new Vendedor(uniqid(), "Arlindo", 32, "Rua das mamonas assassinas", "(42)12823-4493", 1200);

/* instância de Venda com seus parâmetros do construtor - $id, $humano (Precisa ser atrelhado a venda)
registradas vendas, exibindo as vendas e o valor total de vendas.

*/

// Isso seria para uma venda de vários produtos, gerando somente um único ID, registra venda de um pedido por vez e mostra o total em vendas.

echo " ------------------ Registro um de vendas ------------------ \n";
$venda = new Venda(uniqid(), $vendedor);

$venda->registrarVenda($produto1, 2);
$venda->registrarVenda($produto2, 5);
$venda->registrarVenda($produto3, 6);
$venda->registrarVenda($produto4, 2);
$venda->registrarVenda($produto1, 1);

$venda->exibirVendas();

// outro exemplo de instância de vendas com outra quantidade de produtos e novo ID

echo " ------------------ Registro dois de vendas ------------------ \n";

$venda2 = new Venda(uniqid(), $vendedor);

$venda2->registrarVenda($produto1, 1);
$venda2->registrarVenda($produto2, 2);
$venda2->registrarVenda($produto3, 2);
$venda2->registrarVenda($produto4, 1);
$venda2->registrarVenda($produto1, 5);

$venda2->exibirVendas();

echo " ------------------------------------------------------------- \n";

echo " -----------------Animais falando usando Polimorfismo--------- \n";

//$id, $nome, Humano $humano, $raca, $quantidadePatas, $cor, $peso, $tamanho)

$tiago = new Humano(uniqid(),"Tiago", "32", "Rua pedro siqueira", "(42)98824-2993");

$cachorro = new Cachorro(uniqid(), "Zoe", $tiago, "Border Colie", 4, "Bluemerle", "11 kg", "médio");

$gato = new Gato(uniqid(), "Zira", $tiago, "Vira Lata", 4, "Tri-color", "2,5 kg", "pequeno");

$cavalo = new Cavalo(uniqid(), "Zeus", $tiago, "Cavalão", 4, "Preto e Branco", "180 kg", "grande");

$cachorro-> falar();
$gato-> falar();
$cavalo-> falar();

echo " ------------------------------------------------------------- \n";

echo " -----------------Animais ordenando compra-------------------- \n";

// o animal pode pedir um produto já registrado e também passar a quantidade desejada.

$cachorro->ordenarCompra($produto6, 5);
$gato->ordenarCompra($produto1, 1);
$cavalo->ordenarCompra($produto5, 1);

echo " ------------------------------------------------------------- \n";

echo " -----------------Humanos e seus métodos---------------------- \n";

// parâmetros para instâncias - $id, $nome, $idade, $endereco, $contato, $salario, Vendedor já foi utilizado no começo do código

$veterinario = new Veterinario(uniqid(), "Chico", "29", "Rua das flores", "(42)99999-1121", 4500);
$balconista = new Balconista(uniqid(), "Pedro", "25", "Rua das Rosas", "(42) 232301-1221", 1000);

$balconista->falar();
$veterinario->falar();

//A classe veterínário usa método set e get para acessar a variável privada especialidade.
$veterinario-> setEspecialidade("Dermatologia Veterinária");
$veterinario-> getEspecialidade();

echo " ------------------------------------------------------------- \n";