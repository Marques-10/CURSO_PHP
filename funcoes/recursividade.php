<div class="titulo">Recursividade</div>

<?php

function somaUmAte($num) {

    $contador = 0;

    for($i = $num; $i >= 1; $i--) {
        $contador += $i;
    }

    return $contador;
}

echo somaUmAte(5) . '<br>';

function somaRecursivaUmAte($numero) {
    // Condição de parada!!!
    if ($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
   
}

echo somaRecursivaUmAte(5) . '<br>';

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(5) . '<br>';

// function somarAteUmRecursiva($total, $corrente = 0) {

//     if (!is_numeric($total)) {
//         return "Isto não é um número!!!";
//     }

//     if ($total < 0) {
//         return "Não processo números menores que zero!!!";
//     }

//     if ($corrente == 0) {
//         $corrente = $total;
//     }

//     if ($corrente == 2) {
//         return $total += 1;
//     }

//     $corrente = --$corrente;
//     $total = $total + $corrente;

//     return somarAteUmRecursiva($total, $corrente);
// }

// echo somarAteUmRecursiva(10);