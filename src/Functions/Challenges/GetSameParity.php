<?php

/*Реализуйте функцию getSameParity, которая принимает на вход список и
возвращает новый, состоящий из элементов, у которых такая же четность, как
и у первого элемента входного списка.*/

function getSameParity($coll)
{
    if (empty($coll)) {
        return [];
    }

    $parity = abs($coll[0]) % 2;
    $filtered = array_filter($coll, fn($num) => abs($num) % 2 === $parity);

    return array_values($filtered);
}
