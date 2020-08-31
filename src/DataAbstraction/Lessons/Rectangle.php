<?php

/*Реализуйте абстракцию (набор функций) для работы с прямоугольниками,
стороны которого всегда параллельны осям. Прямоугольник может располагаться
в любом месте координатной плоскости.

При такой постановке, достаточно знать только три параметра для однозначного
задания прямоугольника на плоскости: координаты левой-верхней точки, ширину
и высоту. Зная их, мы всегда можем построить прямоугольник одним единственным
способом.*/

function makeRectangle($point, $width, $height)
{
    return [
        'point' => $point,
        'width' => $width,
        'height' => $height
    ];
}

function getStartpoint($rectangle)
{
    return $rectangle['point'];
}

function getWidth($rectangle)
{
    return $rectangle['width'];
}

function getHeight($rectangle)
{
    return $rectangle['height'];
}

function containsOrigin($rectangle)
{
    $height = getHeight($rectangle);
    $width = getWidth($rectangle);

    $upperLeft = getStartpoint($rectangle);
    $lowerRight = makeDecartPoint(getX($upperLeft) + $width, getY($upperLeft) - $height);

    if (getQuadrant($upperLeft) === 2 && getQuadrant($lowerRight) === 4) {
        return true;
    }

    return false;
}
