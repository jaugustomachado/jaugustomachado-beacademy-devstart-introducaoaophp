<?php


$produto1=[
    'nome'=> 'lapis',
    'preço'=> 1.00,
    'descrição'=>'lapis de madeira',
    'foto'=>'<img src="lapis.jpg" alt="foto de um lapis">'
];

$produto2=[
    'nome'=> 'borracha',
    'preço'=> 1.50,
    'descrição'=>'borracha branca',
    'foto'=>'<img src="borracha.jpg" alt="borracha">'
];

$produtos=[
    $produto1,
    $produto2
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
    
    <H1 class="mt-5">Tabela de produtos</H1>
    <table class="table table-hover table-stripped mt-5">
        <hr>
        <thead>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Foto</th>
        </thead>
        <tbody>
        <?php
                foreach ($produtos as $produto){
                        echo' <tr>';
                        echo "<td>".$produto['nome']. "</td>" ;
                        echo "<td>".$produto['preço']. "</td>" ;
                        echo "<td>".$produto['descrição']. "</td>" ;
                        echo "<td>".$produto['foto']. "</td>" ;
                        echo' </tr>';
                    }
            ?>
        </tbody>
    </table>

</div>