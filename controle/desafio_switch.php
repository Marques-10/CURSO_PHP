<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371192;
const FATOR_METRO_KM = 1000;

if ( isset($_POST['param']) && !empty($_POST['param']) && isset($_POST['conversao']) ) {

    $param = $_POST['param'];
    $param_original = $param;

    $conversao = $_POST['conversao'];
    $uni_original = '';

    switch ($conversao) {
        case 'km-milha':
            $valor = $param * FATOR_KM_MILHA;
            $uni   = 'milhas';
            $uni_original = "KM";
            break;
        case 'milha-km':
            $valor = ($param * 1) / FATOR_KM_MILHA;
            $uni   = 'KM';
            $uni_original = 'Milhas';
            break;
        case 'metro-km':
            $valor = $param / FATOR_METRO_KM;
            $uni   = 'KM';
            $uni_original = 'Metros';
            break;
        case 'km-metro':
            $valor = $param * FATOR_METRO_KM;
            $uni = 'metros';
            $uni_original = 'KM';
            break;
    }
    echo "${param_original} ${uni_original} = ${valor} ${uni}";
}