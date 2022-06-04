<?php

$bandas=[
    ['dream theater', 1],
    ['neo pi neo', 2],
    ['exaltasamba', 3],
];


foreach ($bandas as $cadaBanda){
    echo "<td>".$cadaBanda[0]. " " .$cadaBanda[1] . "</td>" ;
}

echo'<table style="width:200px">
    <thead>
        <tr>
            <th>bandas</th>
            <th><center></center>qtd</th>
        </tr>
    </thead>
    <tbody>';
        foreach ($bandas as $cadaBanda){
            echo' <tr>';
            echo "<td>".$cadaBanda[0]. "</td>" ;
            echo "<td>".$cadaBanda[1]. "</td>" ;
            echo' </tr>';
        }
    echo'
    </tbody>
    </table>';