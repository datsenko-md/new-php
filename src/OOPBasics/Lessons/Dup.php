<?php

/*Реализуйте функцию dup, которая клонирует переданную точку. Под клонированием
подразумевается процесс создания нового объекта, с такими же данными как и
у старого.*/

function dup(Point $point)
{
    $newPoint = new Point();
    $newPoint->x = $point->x;
    $newPoint->y = $point->y;

    return $newPoint;
}
