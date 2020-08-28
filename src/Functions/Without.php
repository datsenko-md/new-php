<?php

/*Реализуйте функцию without, которая работает по такому же принципу, что и
функция из теории, кроме одного аспекта. Эта функция должна принимать любое
число аргументов, где первый аргумент массив, а все остальные - значения,
которые нужно исключить из переданного массива. Сделайте решение функциональным.

Эту задачу можно решить с помощью функции array_diff, но подразумевается что
вы сделаете это без ее использования.*/

function without($args, ...$exclusions)
{
    return array_values(array_filter($args, fn($arg) => !in_array($arg, $exclusions)));
}
