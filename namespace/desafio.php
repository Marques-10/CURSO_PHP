<div class="titulo">Desafio Namespace</div>

<?php

include('app_classes.php');

use \App\Classes\Usuario\Usuario as User;

$user = new User('Lucas Super', 23, 'gust_mend');
$user->apresentar();
unset($user);