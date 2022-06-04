<?php

$url = $_SERVER['REQUEST_URI'];

if($url==='/'){
    echo '<h1>Pagina Inicial</h1>';
}elseif ($url ==='/login'){
    echo '<h1>login</h1>';
}elseif ($url ==='/cadastro'){
    echo '<h1>cadastro</h1>';
}else{
    echo '<h1>pagina não encontrada</h1>';
}