<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3, 4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'esse é um texto de teste';
echo '<br>' . $texto[0];

