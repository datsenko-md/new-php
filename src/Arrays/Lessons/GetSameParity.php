<?php

/*Реализуйте функцию getSameParity, которая принимает на вход массив чисел и
возвращает новый, состоящий из элементов, у которых такая же чётность, как и у
первого элемента входного массива.*/

function getSameParity($arr)
{
    if (empty($arr)) {
        return [];
    }

    $result = [];
    $parity = $arr[0] % 2;

    foreach ($arr as $value) {
        if ($value % 2 === $parity) {
            $result[] = $value;
        }
    }

    return $result;
}
