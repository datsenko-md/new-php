<?php

/*Реализуйте указанные ниже функции:

makeSegment(). Принимает на вход две точки и возвращает отрезок.
getMidpointOfSegment(). Принимает на вход отрезок и возвращает точку
находящуюся на середине отрезка.
getBeginPoint(). Принимает на вход отрезок и возвращает точку начала отрезка.
getEndPoint(). Принимает на вход отрезок и возвращает точку конца отрезка.*/

function makeSegment($beginPoint, $endPoint)
{
    return ['beginPoint' => $beginPoint, 'endPoint' => $endPoint];
}

function getBeginPoint($segment)
{
    return $segment['beginPoint'];
}

function getEndPoint($segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);

    $x = (getX($beginPoint) + getX($endPoint)) / 2;
    $y = (getY($beginPoint) + getY($endPoint)) / 2;

    return makeDecartPoint($x, $y);
}
