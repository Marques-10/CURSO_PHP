<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "${$a}"; // valorAA
echo "<br> $a {$$a} ${$a} $valorA";

echo "<br>";

$epa = 'opa';
$opa = 'vish';
echo "$epa {$$epa}";