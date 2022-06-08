<div class="titulo">Operações_Array</div>

<?php

$dados = [
    "mome" => "Carlos",
    "idade" => 28
];

$dados2 = [
   "Natauralodade" => "Manaus - AM"
];

$dadosCompletos = $dados + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos ";
echo '<br>';
echo "{$dadosCompletos['idade']}";

$impares = [1, 3, 5, 7, 9];
$pares = [2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);