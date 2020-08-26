<?php

/*Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых
скобок в арифметических выражениях.*/

function checkIfBalanced($expression)
{
    $stack = [];
    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        $currSymbol = $expression[$i];
        if ($currSymbol === '(') {
            array_push($stack, $currSymbol);
        } elseif ($currSymbol === ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }

    return empty($stack);
}
