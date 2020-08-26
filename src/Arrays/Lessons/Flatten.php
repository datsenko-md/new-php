<?php

/*Реализуйте функцию flatten(). Эта функция принимает на вход массив и
выпрямляет его: если элементами массива являются массивы, то flatten()
сводит всё к одному массиву, раскрывая каждый вложенный.*/

function flatten($arr)
{
    $result = [];
    foreach ($arr as $item) {
        if (is_array($item)) {
            $result = [...$result, ...$item];
        } else {
            $result[] = $item;
        }
    }

    return $result;
}
