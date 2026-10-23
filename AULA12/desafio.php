<!-- nome, preço. 3 produtos e exibir o valor caso comprar os 3 que criei. mnsg soma total dos 3 produtos foi... -->

<?php

class Produto {
    public $nome;
    public $preco;

}

$produto = new Produto();

$produto->nome = "Pão de queijo";
$produto->preco = 4.00;

echo "$produto->nome\n";
echo "$produto->preco\n";

$produto02 = new Produto();

$produto02->nome = "Café";
$produto02->preco = 2.50;

echo "$produto02->nome\n";
echo "$produto02->preco\n";

$produto03 = new Produto();

$produto03->nome = "Salgado";
$produto03->preco = 6.50;

echo "$produto03->nome\n";
echo "$produto03->preco\n";

$soma = ($produto->preco) + ($produto02->preco)+($produto03->preco);
echo "A soma total dos produtos é igual a: R$".$soma;
?>