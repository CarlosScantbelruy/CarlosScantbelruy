<div class="titulo">Desafio_Array</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    "a" => 4,
    5,
    "9" => 6,
    "06" => 7,
    0 => 8
);
// Array([0] => 1 [4] => 2 [3] => 3 ['a'] => 4 )
// [5 => 5 ['9'] => 6 ['06'] => 7]
echo'<br>';
print_r($lista);
