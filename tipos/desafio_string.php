<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual os métodos que a posição do texto 'abc'
// na string "!AbcaBcabc"

echo stripos('!AbcaBcabc', 'abc') . '<br>';
echo strpos( strtolower('!AbcaBcabc'), 'abc' ) . '<br>';