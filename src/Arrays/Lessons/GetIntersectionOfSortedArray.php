<?php

/*Реализуйте функцию getIntersectionOfSortedArray, которая принимает на вход два
отсортированных массива и находит их пересечение.*/

function getIntersectionOfSortedArray($arr1, $arr2)
{
    // BEGIN (write your solution here)
    $i = 0;
    $j = 0;

    $len1 = count($arr1);
    $len2 = count($arr2);

    $intersection = [];

    while ($i < $len1 && $j < $len2) {
        $value1 = $arr1[$i];
        $value2 = $arr2[$j];

        if ($value1 < $value2) {
            $i++;
        } elseif ($value1 > $value2) {
            $j++;
        } else {
            $intersection[] = $value1;
            $i++;
            $j++;
        }
    }

    return $intersection;
    // END
}
