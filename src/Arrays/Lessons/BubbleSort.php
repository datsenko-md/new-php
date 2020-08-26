<?php

/*Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую
сортировку. Постарайтесь не подглядывать в текст теории и попробуйте
воспроизвести алгоритм по памяти.*/

function bubbleSort($arr)
{
    $size = count($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $size - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;
    } while ($swapped);

    return $arr;
}
