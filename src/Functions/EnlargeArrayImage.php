<?php

/*Реализуйте функцию enlargeArrayImage, которая принимает изображение в виде
двумерного массива и увеличивает его в два раза.*/

function duplicateEach($items)
{
    return Collection\flatten(
        array_map(fn($item) => [$item, $item], $items)
    );
}

function enlargeArrayImage($matrix)
{
    $horizontallyStretched = array_map(fn($col) => duplicateEach($col), $matrix);
    return duplicateEach($horizontallyStretched);
}
