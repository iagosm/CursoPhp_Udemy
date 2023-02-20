<?php

    $arr =[
        'Iago' => 10,        
        'Lucas' => 4,        
        'Joao' => 5,        
        'Batista' => 3,        
        'Jose' => 4,        
        'Antonio' => 6,
        'Luciene' => 8
    ];

    arsort($arr); // ordenando o array
    

    ?>
    <h1>Ranking</h1>
    <table style="margin-bottom: 100px;">
        <tr>
            <th>Nome</th>
            <th>Pontuação</th>
        </tr>
        <?php foreach($arr as $nome => $pontuacao): ?>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $pontuacao; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>


    <?php

    $ranking =[
        'Iago' => 104,        
        'Lucas' => 41,        
        'Joao' => 566,        
        'Batista' => 32,        
        'Jose' => 414,        
        'Antonio' => 622,
        'Luciene' => 84
    ];

    arsort($ranking); // ordenando o array
    

    ?>


    <h1>Ranking</h1>
    <table style="margin-bottom: 100px;">
        <tr>
            <th>Nome</th>
            <th>Pontuação</th>
        </tr>
        <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <tr>
            <td><?php echo $pessoa; ?></td>
            <td><?php echo $pontuacao; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>