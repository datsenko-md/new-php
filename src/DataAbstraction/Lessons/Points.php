<?php

/*Реализуйте интерфейсные фунции точек:

makeDecartPoint. Принимает на вход координаты и возвращает точку.
Уже реализован.
getX
getY*/

function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}

// BEGIN (write your solution here)
function getAngle($point)
{
    return $point['angle'];
}

function getRadius($point)
{
    return $point['radius'];
}

function getX($point)
{
    $radius = getRadius($point);
    $angle = getAngle($point);

    return $radius * cos($angle);
}

function getY($point)
{
    $radius = getRadius($point);
    $angle = getAngle($point);

    return $radius * sin($angle);
}
