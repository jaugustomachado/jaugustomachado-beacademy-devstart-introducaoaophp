<?php

$alunos = [ //dimensão 1
    [ //dimensão2
        [   //dimensão 3
            'chico'
        ]

    ]
];

var_dump($alunos);

echo $alunos[0][0][0];

$a1=[
    'nome'=>'chico',
    'email'=>'chico@hotmail.com',
    'tel'=>'99544-262',
    'notas'=>[
        9,
        8,
        7,
        6
    ]
];

$a2=[
    'nome'=>'maria', //0
    'email'=>'maria@hotmail.com', // 1
    'tel'=>'1234567', //2
    'notas'=>[ //3
        9,
        8,
        7,
        6
    ]
];


$alunos = [ 
    $a1,
    $a2
];

var_dump($alunos);

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">

    
    <table class="table table-hover table-stripped mt-5">
        <h1 class="mt-5">Alunos</h1>
        <hr>
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>email</th>
                <th>telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($alunos as $aluno){
                        echo' <tr>';
                        echo "<td>".$aluno['nome']. "</td>" ;
                        echo "<td>".$aluno['email']. "</td>" ;
                        echo "<td>".$aluno['tel']. "</td>" ;
                        echo' </tr>';
                    }
            ?>
        </tbody>
    </table>
</div>
