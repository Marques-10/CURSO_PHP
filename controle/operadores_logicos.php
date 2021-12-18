<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true OR true);
var_dump(true OR false);
var_dump(false OR true);
var_dump(false OR false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 60 && $sexo === 'F');
$criterioMulher = ($idade >= 65 && $sexo === 'M');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar";

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

?>