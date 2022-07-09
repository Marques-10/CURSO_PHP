<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    
    public function metodo3() {
        echo "Estou funcionando";
    }

    public function metodo1() {
    
    }
}

class Classe extends ClasseAbstrata {
    
    function __construct($parametro) {
        $this->metodo2($parametro);
    }

    public function metodo2($parametro) {

    }

    function metodo3() {
        parent::metodo3();
    }
}

$exemplo = new Classe('parâmetro');
$exemplo->metodo3();