<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception {

}

function intdiv($a, $b) {
    
    if($b == 0) {
        throw new \DivisionByZeroError();
    }

    $modulo = $a % $b;
    if($modulo > 0) {
        throw new NaoInteiroException();
    }

    return $a / $b;
}

// echo intdivc(8, 0);
// echo intdiv(8, 3);