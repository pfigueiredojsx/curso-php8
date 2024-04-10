<?php

$sobrenome = "Figueiredo";

$nome1 = "Pedro Henrique $sobrenome";
$nome2 = 'Pedro Henrique $sobrenome';

$idade = 25.54533434;

$vip = false;

$aereas = ["Gol", "Latam", "Azul"];

class Cliente {
  public function __construct(public string $nome) 
  {
    echo $this->nome;
  }
}

$linhasAereas = function(): iterable {
  return ["Gol", "Latam", "Azul"];
};

function executar(mixed $parametro): void {
  
}

$nulo = NULL;

$arquivo = fopen("./variaveis.php", "a+");

// echo $nome1;
// echo "<br/>";
// echo $nome2;
echo "<br/>";
echo gettype($arquivo);
echo "<br/>";
echo get_debug_type($arquivo);
echo "<br/>";
// var_dump(is_iterable($linhasAereas()));
// var_dump(is_callable($linhasAereas));