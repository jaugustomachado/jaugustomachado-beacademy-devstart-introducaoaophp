<?php

$arquivo =fopen('produtos.csv','a+');
fwrite($arquivo,'ale'.PHP_EOL);
fwrite($arquivo,'bruno'.PHP_EOL);
fclose($arquivo);