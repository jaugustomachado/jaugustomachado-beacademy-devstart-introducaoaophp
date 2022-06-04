<?php

declare(strict_types=1);

function soma(float $n1, float $n2):float
{
    return $n1+$n2;
}

echo soma(5.67,20);

echo PHP_EOL. '---------'. PHP_EOL;

function welcome(string $nome): string
{
    return "bem vindo {$nome}";
}

echo welcome('maria');