<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="POST">
    <div class="container">
        <div>
            <label for="linhas">Linhas</label>
            <input type="number" name="linhas" id="linhas" value="<?= $_POST['linhas'] ?? 10; ?>">
        </div>

        <div>
            <label for="colunas">Colunas</label>
            <input type="number" name="colunas" id="colunas" value="<?= $_POST['colunas'] ?? 10; ?>">
        </div>

        <button>Exibir tabela</button>
    </div>
</form>

<?php

$linhas = '';
$colunas = '';

if ( isset($_POST['linhas']) && !empty($_POST['linhas']) ) {
    $linhas = $_POST['linhas'];
}

if ( isset($_POST['colunas']) && !empty($_POST['colunas']) ) {
    $colunas = $_POST['colunas'];
}

if ($linhas != '' && $colunas != '') {
    // echo "linhas: $linhas <br> colunas: $colunas";
?>

    <table>

        <?php

        $cont = 1;

        for ($l = 1; $l <= $linhas; $l++) {
                
        ?>

        <tr style="<?php echo($l % 2 == 0 ? "background-color: #FFF" : "background-color: #CCC") ?>">
                    
            <?php
                
            for ($c = 1; $c <= $colunas; $c++) {
                    
            ?>

            <td><?php echo $cont; ?></td>

            <?php

                $cont++;
            }

            ?>
                
        </tr>
                
        <?php

        }

        ?>
    </table>

<?php

}

?>

<style>
    .container {
        display: flex;
        justify-content: space-around;
        width: 50%;
        background-color: #ddd;
        padding: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>