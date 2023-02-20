<?php

    $nomes = [
        'Iago' => 22,
        'Lucas' => 19,
        'Matheus' => 35,
        'Teo' => 22,
        'Jorge' => 15,
        'Estefane' => 20
    ];


    ?>

    <table border="1px">
        <tr>
            <th>Nome:</th>
            <th>Idade:</th>
        </tr>
       <?php foreach($nomes as $nome => $idade): ?>
        <tr>   
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>