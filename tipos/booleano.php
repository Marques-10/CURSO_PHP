<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); // True
echo '<br>' . var_dump((bool) -1); // True
echo '<br>' . var_dump((bool) 0.0); // False
echo '<br>' . var_dump((bool) 0.00000000001); // True
echo '<br>' . var_dump((bool) ""); // False
echo '<br>' . var_dump((bool) " "); // True
echo '<br>' . var_dump((bool) "0"); // False
echo '<br>' . var_dump((bool) "false"); // True

echo '<br>' . var_dump(!!"false");