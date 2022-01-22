<div class="titulo">Desafio Tabela #01</div>

<?php

$matrix = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

// foreach ($matrix as $linha) {
//     foreach ($linha as $valor) {
//         echo "$valor ";
//     }

//     echo "<br>";
// }

?>

<table>

    <?php foreach ($matrix as $indice => $linha): ?>
    
        <tr>

            <?php foreach ($linha as $valor): ?>
            
            <td><?php echo $valor; ?></td>
            
            <?php endforeach; ?>

        </tr>
    
    <?php endforeach; ?>

</table>

<hr>

<table>

    <?php foreach ($matrix as $indice => $linha): ?>
    
        <tr style="<?php echo($indice % 2 == 0 ? "background-color: #FFF" : "background-color: #CCC") ?>">
    
            <?php foreach ($linha as $valor): ?>

            <td><?php echo $valor; ?></td>
           
            <?php endforeach; ?>
        
        </tr>

    <?php endforeach; ?>

</table>

<style>
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