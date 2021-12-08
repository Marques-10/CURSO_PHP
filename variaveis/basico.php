<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
vAr_DuMp($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b; // Variáveis em PHP são casesensitive
EcHo $somaDosNumeros; // Constantes em PHP como echo, var_dump não são casesensitive

echo '<br>';
echo isset($somaDosNumeros); // Boolean

unset($somaDosNumeros);
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vÂr5 = 'valida'; // Evitar
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER['HTTP_HOST']);