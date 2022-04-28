<div class="titulo">Desafio Recursão</div>

<?php

/*

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]]

> 1
> 2
>> 3
.
.
.

*/

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, '$');

// function tracos($x) {
//     $str = '';
//     for ($i = 0; $i <= $x; $i++) {
//         $str .= '>';
//     }

//     return $str;
// }

// porra professor nao era recursiva???
// function numsArrayRecursao($array, $i = 0, $c = 0) {

//     if (is_array($array)) {
//         if ($i < count($array)) {
//             if (is_array($array[$i])) {
//                 $c = $c + 1;
//                 $clone = numsArrayRecursao($array[$i], 0, $c);
//                 $i = $i + 1;
//             } else {
//                 $tracos_concat = tracos($c);
//                 echo $tracos_concat . " " . $array[$i] . "<br>";
//                 $i = $i + 1;
//             }
            
//             return numsArrayRecursao($array, $i, $c);
//         } else {
//             return;
//         }
//     }
// }

// numsArrayRecursao($array) . "<br>";

// function imprimirArray($array, $nivel = '>') {
//     foreach($array as $i => $v) {
//         if (is_array($v)) {
//             $nivel .= '>';
//             imprimirArray($v, $nivel);
//         } else {
//             echo $nivel . " " . $v . "<br>";
//         }
//     }
// }