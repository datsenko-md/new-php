<?php

/*Реализуйте функцию sayPrimeOrNot(), которая проверяет переданное число на
простоту и печатает на экран yes или no.*/

function sayPrimeOrNot($num)
{
    $isPrime = isPrime($num);
    print_r($isPrime ? 'yes' : 'no');
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    $divider = 2;
    $half = $num / 2;

    while ($divider <= $half) {
        if ($num % $divider === 0) {
            return false;
        }

        $divider++;
    }

    return true;
}
