<div class="titulo">Mapa_Array</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.9,
);

print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';

var_dump($dados["outra"]);

$lista = array(
    "a",
    "cinco",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo'<br>';
print_r($lista);


