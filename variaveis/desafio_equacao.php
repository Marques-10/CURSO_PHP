<div class="titulo">Desafio Equação</div>

<?php

// bloco 1
$num_aa = 6;
$num_ab = 3;
$num_ac = 2;
$den_aa = 3;
$den_ab = 2;

// bloco 2
$num_ba = 1;
$num_bb = 5;
$num_bc = 2;
$num_bd = 7;
$den_ba = 2;

$den_geral = 10;

// resulução bloco 1
$bloco_1_num = ( $num_aa * ($num_ab + $num_ac) ) ** 2;
$bloco_1_den = $den_aa * $den_ab;
$bloco_1_result = $bloco_1_num / $bloco_1_den;

// resolução bloco 2
$bloco_2_num = ($num_ba - $num_bb) * ($num_bc - $num_bd);
$bloco_2_den = $den_ba;
$bloco_2_result = ($bloco_2_num / $bloco_2_den) ** 2;

$resultado = ( ( $bloco_1_result - $bloco_2_result ) ** 3 ) / $den_geral ** 3;

echo $resultado;