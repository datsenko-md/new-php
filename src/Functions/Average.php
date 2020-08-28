<?php

/*Реализуйте функцию average, которая возвращает среднее арифметическое всех
 переданных аргументов. Если функции не передать ни одного аргумента, то она
 должна вернуть null.*/

function average(...$numbers)
{
    return empty($numbers) ? null : array_sum($numbers) / count($numbers);
}
