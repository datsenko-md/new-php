<?php

/*Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива
переданный префикс и возвращает получившийся массив. Функция предназначена
для работы со строковыми элементами. Аргументы:

Массив
Префикс
После префикса автоматически добавляется пробел.*/

function addPrefix($arr, $prefix)
{
    $result = [];

    for ($i = 0, $length = count($arr); $i < $length; $i++) {
        $result[$i] = "{$prefix} {$arr[$i]}";
    }

    return $result;
}
