<?php

/*Реализуйте функцию genDiff, которая сравнивает два ассоциативных массива
и возвращает результат сравнения в виде ассоциативного массива. Ключами
результирующего массива будут все ключи из двух входящих массивов, а
значением строка с описанием отличий: added, deleted, changed или unchanged.

Возможные значения:

added — ключ отсутствовал в первом массиве, но был добавлен во второй
deleted — ключ был в первом массиве, но отсутствует во втором
changed — ключ присутствовал и в первом и во втором массиве, но значения
отличаются
unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми
значениями*/

function genDiff($arr1, $arr2)
{
    $keys = array_merge(array_keys($arr1), array_keys($arr2));
    $diff = [];

    foreach ($keys as $key) {
        if (!array_key_exists($key, $arr1)) {
            $diff[$key] = 'added';
        } elseif (!array_key_exists($key, $arr2)) {
            $diff[$key] = 'deleted';
        } elseif ($arr1[$key] === $arr2[$key]) {
            $diff[$key] = 'unchanged';
        } else {
            $diff[$key] = 'changed';
        }
    }

    return $diff;
}
