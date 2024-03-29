<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR.utf-8', 'portuguese-brazilian');
echo utf8_encode(strftime('%A, %d de %B de %Y', time())) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo utf8_encode(strftime('%A %d de %B de %Y', $amanha)) . '<br>';

$proximaSemana = strtotime('+10 week');
echo utf8_encode(strftime('%A, %d de %B de %Y', $proximaSemana)) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo utf8_encode(strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa));