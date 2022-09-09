<div class="titulo">PDO: Alterar</div>

<?php 

require_once "conexao_pdo.php";

$sql = "UPDATE cadastro 
    SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
    WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '180-12-12',
    'guimudado@gmail.com',
    'https://guicholinha.com.br',
    2,
    12000,
    10
]);

if($resultado) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}