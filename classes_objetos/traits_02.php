<div class="titulo">Traits #02</div>

<?php
ini_set('display_errors', false);

trait validacao {
    public function validaString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validaString($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validaString insteadOf validacao;
        // validacao::validaString insteadOf validacaoMelhor;
        
        validacao::validaString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validaString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));