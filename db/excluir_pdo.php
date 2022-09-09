<div class="titulo">PDO: Excluir</div>

<?php

require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id s= ?";
$stmt = $conexao->prepare($sql);
if($stmt->execute([11])){
    echo "Removido com sucesso :)";
} else {
    echo"Erro :(";
    print_r($stmt->errorInfo());
}