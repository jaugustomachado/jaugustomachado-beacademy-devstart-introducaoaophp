<?php

$mes=9;

echo match ($mes){
    1=>'jan',
    9=>'set',
    default=>'mes invalido'
};