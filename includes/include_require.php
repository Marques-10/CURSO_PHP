<div class="titulo">Include vs Require</div>

<?php

echo 'Usando include com arquivo inexistente... <br>';
include('arquivo_inexistente.php');

echo 'Usando require com arquivo inexistente... <br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo... <br>';

// Include gera um warning
// Require gera um erro fatal e não executa o restante do código;