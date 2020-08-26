<?php

/*Вес Хэмминга это количество единиц в двоичном представлении числа.
Реализуйте функцию hammingWeight, которая считает вес Хэмминга.*/

function hammingWeight($num)
{
    $bin = decbin($num);
    return array_sum(str_split($bin));
}
