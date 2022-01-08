<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('laranja', 'abacaxi');
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["fiat" => "UNO", "ford" => "Fiesta"];
// CARROS["bmw"] = '325i';
echo '<br>'. CARROS['fiat'];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[0];

?>