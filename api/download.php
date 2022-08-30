<div class="titulo">Download</div>

<?php
// session_start();
ini_set("display_errors", 0);

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = "C:/wamp64/www/CURSO_PHP/files/";
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;

$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivos!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="files/<?= $arquivo ?>" download>
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
