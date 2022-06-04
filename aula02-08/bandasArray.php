<?php

$bandas=[
    'dream theater',
    'neo pi neo',
    'exaltasamba',
];

$bandas[100]='frevo';


echo '<ul>';

foreach ($bandas as $cadaBanda){
    echo'<li>'. $cadaBanda . '</li>';
}

echo '</ul>';

echo'<ul>';

for($n=0;$n<=2;$n++){
    echo'<li>'. $bandas[$n] . '</li>';
}

echo '</ul>';