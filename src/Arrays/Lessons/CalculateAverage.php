<?php

/*Реализуйте функцию calculateAverage(), которая высчитывает среднее
арифметическое элементов массива. */

function calculateAverage($arr)
{
    if (empty($arr)) {
        return 0;
    }

    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }

    return $sum / count($arr);
}
