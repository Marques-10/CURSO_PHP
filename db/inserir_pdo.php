<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
        (nome, email, nascimento site, filhos, salario)
        VALUES (
            'Guilherme Filho',
            'guidagalera@gmail.com',
            '1989-7-21',
            'https://guidagalera.com.br',
            0,
            3000
        )";

$conexao = novaConexao();
// print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com ID: $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

$conexao->close();