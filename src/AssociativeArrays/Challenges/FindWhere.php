<?php

/*Реализуйте функцию findWhere, которая принимает на вход массив (элементы
которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива),
а возвращает первый элемент исходного массива, значения которого соответствуют
переданным парам (всем переданным). Если совпадений не было, то функция должна
вернуть null.*/

function findWhere($data, $query)
{
    foreach ($data as $record) {
        $intersection = array_intersect_assoc($query, $record);
        if ($intersection === $query) {
            return $record;
        }
    }

    return null;
}
