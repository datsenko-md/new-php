<?php

/*Реализуйте функцию calcInPolishNotation, которая принимает массив,
каждый элемент которого содержит число или знак операции (+, -, *, /).
Функция должна вернуть результат вычисления по обратной польской записи.*/

function calcInPolishNotation($expression)
{
    $stack = [];
    $signs = ['+', '-', '*', '/'];

    foreach ($expression as $symbol) {
        if (in_array($symbol, $signs)) {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $symbol = calculate($a, $b, $symbol);
        }

        array_push($stack, $symbol);
    }

    return array_pop($stack);
}

function calculate($a, $b, $operation)
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
    }
}
