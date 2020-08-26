<?php

/*Реализуйте функцию getSameCount, которая считает количество общих уникальных
элементов для двух массивов. Аргументы:

Первый массив
Второй массив*/

function getSameCount($coll1, $coll2)
{
    $count = 0;
    $arr1 = array_unique($coll1);
    $arr2 = array_unique($coll2);

    foreach ($arr1 as $item) {
        if (in_array($item, $arr2, true)) {
            $count++;
        }
    }

    return $count;
}
