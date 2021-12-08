<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);   // true
var_dump(1 > 1);    // false
var_dump(1 >= 1);   // true
var_dump(4 < 23);   // false
var_dump(1 <= 7);   // true
var_dump(1 != 1);   // false
var_dump(1 <> 1);   // false

var_dump(111 == '111');     // true
var_dump(111 === '111');    // false
var_dump(111 != '111');     // false
var_dump(111 !== '111');    // true

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 15;
if ($idade < 18) {
    echo "Menor de idade<br>";
} else if ($idade < 65) {
    echo "Adulto<br>";
} else {
    echo "Terceira idade";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>