<?php
$frutas=[
    'laranja',//0
    'banana',//1
    'abacaxi' //2
];
//adicionando nova fruta no array

$frutas[]='maça';//3
$frutas[10]='melancia';//10
$frutas[7]='morango';//
$frutas[]='tangerina';//11
var_dump($frutas);
?>

<ul>
    <li><?php 
     for($indice=0 ; $indice<=3 ; $indice++){
        echo $frutas[$indice] . "<br>";
        
    }?></li>
</ul>