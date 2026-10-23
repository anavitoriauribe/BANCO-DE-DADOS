<?php

class Carro{
    public $marca;
    public $modelo;
}

$carro_ana = new Carro;
$carro_ana->marca = "Volkswagen";
$carro_ana->modelo = "GOLF GTI";

echo "$carro_ana->marca\n";
echo "$carro_ana->modelo\n";


?>