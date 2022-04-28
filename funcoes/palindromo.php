<div class="titulo">Desafio Palíndromo</div>

<?php

$string = "arara";
echo "'$string' é palíndromo?";
echo "<br>";

isPalindromo($string);

function isPalindromo($str) {
    
    $nova_str = '';
    
    for ($i = strlen($str); $i > 0; $i--) {
        $nova_str .= $str[$i - 1];
    }
    
    echo "'$nova_str' <br>";
    
    if ( strtoupper($str) == strtoupper($nova_str) ) {
        echo "Sim!";
    } else {
        echo "Não!";
    }
}

echo "<hr>";

$string = "matama";
echo "'$string' é palíndromo?";
echo "<br>";

if (strtoupper($string) == strtoupper(strrev($string)))
    echo "Sim!";
else
    echo "Não!";