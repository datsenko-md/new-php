<?php

/*Реализуйте функцию getIn, которая извлекает из массива (который может быть
любой глубины вложенности) значение по указанным ключам. Аргументы:

Исходный массив
Массив ключей, по которым ведется поиск значения
В случае, когда добраться до значения невозможно, возвращается null.*/
/*
function getIn($arr, $keys)
{
    [$key] = $keys;

    if (!is_array($arr) || !array_key_exists($key, $arr)) {
        return null;
    }

    if (count($keys) === 1) {
        return $arr[$key];
    } else {
        return getIn($arr[$key], array_slice($keys, 1));
    }
}
*/

function getIn($arr, $keys)
{
    $current = $arr;

    foreach ($keys as $key) {
        if (!isset($current[$key])) {
            return null;
        }

        $current = $current[$key];
    }

    return $current;
}
