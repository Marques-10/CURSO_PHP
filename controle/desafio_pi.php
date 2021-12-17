<div class="titulo">Desafio PI</div>

<?php

echo pi();
var_dump(pi());

$pi = 3.14;
var_dump($pi);

if($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}

if($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!!';
}

// echo "<hr>";

// if($pi === round(pi(), 2)) {
//     echo "<br>Iguais!";
// } else {
//     echo "<br>Diferentes!";
// }