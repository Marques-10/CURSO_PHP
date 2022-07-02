<div class="titulo">Desafio Data</div>

<?php

class Data {

    public $dia; 
    public $mes; 
    public $ano;

    public function __construct($dia = 1, $mes = 1, $ano = 1970) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function apresentar() {
        return "Data {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data('09');
echo $aniversario->apresentar(), '<br>';

$casamento = new Data();
$casamento->dia = 26;
$casamento->mes = '01';
$casamento->ano = 2030;
echo $casamento->apresentar(), '<br>';