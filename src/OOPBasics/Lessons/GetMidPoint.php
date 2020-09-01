<?php

function getMidpoint(Point $a, Point $b)
{
    $point = new Point();
    $point->x = ($a->x + $b->x) / 2;
    $point->y = ($a->y + $b->y) / 2;

    return $point;
}
