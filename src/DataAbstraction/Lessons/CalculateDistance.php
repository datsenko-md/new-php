<?php

/*Реализуйте функцию calculateDistance(), которая находит расстояние между
двумя точками на плоскости.*/

function calculateDistance($point1, $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;
    return sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);
}
