<?php

class Pessoa {
    public $nome;
    public $idade;

}

$pessoa = new Pessoa();

$pessoa->nome = "Platini";
$pessoa->idade = "23";

echo "$pessoa->nome\n";
echo "$pessoa->idade\n";

$pessoa02 = new Pessoa();

$pessoa02->nome = "Ana";
$pessoa02->idade = "16";

echo "$pessoa02->nome\n";
echo $pessoa02->idade;
?>