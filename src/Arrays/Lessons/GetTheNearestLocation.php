<?php

/*Реализуйте функцию getTheNearestLocation(), которая находит место ближайшее к
указанной точке на карте и возвращает его. Параметры функции:

$locations – массив мест на карте. Каждое место это массив из двух элементов,
где первый элемент это название места, второй – точка на карте (массив из двух
чисел x и y).
$point – текущая точка на карте. Массив из двух элементов-координат x и y.*/

function getTheNearestLocation($locations, $currentPoint)
{
    if (empty($locations)) {
        return null;
    }

    [$nearestLocation] = $locations;
    [, $nearestPoint] = $nearestLocation;
    $lowestDistance = getDistance($nearestPoint, $currentPoint);

    foreach ($locations as $location) {
        [, $point] = $location;
        $distance = getDistance($point, $currentPoint);

        if ($distance < $lowestDistance) {
            $nearestLocation = $location;
            $lowestDistance = $distance;
        }
    }

    return $nearestLocation;
}
