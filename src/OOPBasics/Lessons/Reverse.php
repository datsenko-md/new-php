<?php

/*Реализуйте функцию reverse, которая принимает на вход отрезок и возвращает
новый отрезок с точками, добавленными в обратном порядке (begin меняется
местами с end).*/

function reverse($segment)
{
    $begin = $segment->beginPoint;
    $end = $segment->endPoint;

    $reversedBegin = new Point($end->x, $end->y);
    $reversedEnd = new Point($begin->x, $begin->y);

    return new Segment($reversedBegin, $reversedEnd);
}
