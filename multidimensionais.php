<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    "pessoal" => [ 
        "mome" => "Carlos", 
        "idade" => 29 
    ],
    [
        "mome" => "Rosi",
        "idade" => 27
    ],
];

print_r($dados);
echo '<br>' . $dados[0] ['idade'];
echo '<br>' . $dados[1] ['idade'];

$dados [] = [
        "mome" => "Manuela", 
        "idade" => 1 
];
    echo'<br>';
    print_r($dados);
    echo '<br>' . $dados[2] ['idade'];
