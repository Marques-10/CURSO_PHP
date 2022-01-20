<div class="titulo">Desafio For</div>

<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar o $i++
-->

<?php

$v = "#";

for($i = 1; $i <= 5; $i++) {

    for($j = 1; $j <= $i; $j++) {
        echo "$v";
    }

    echo "<br>";
}

$m = [
    1 => "#####",
    "####",
    "###",
    "##",
    "#"
];

$max = 1;

// for ($max = 5; $max )

for(count($m); count($m) >= $max; ) {

    echo $m[count($m)] . " <br>";
    unset($m[count($m)]);
}