<div class="titulo">Try/Catch</div>

<?php
ini_set("display_errors", 0);
// echo 7 / 0;
// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado! <br>';
}