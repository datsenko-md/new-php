<?php

/*Чанкованием (от англ. Chunk — ячейка, кусок, осколок) в программировании
называют разбиение коллекции (массива) на несколько более мелких коллекций.
Например, разобьём массив на чанки, так чтобы в каждом чанке было не более
двух элементов: ['a', 'b', 'c', 'd'] -> [['a', 'b'], ['c', 'd']].*/

function getChunked($coll, $size)
{
    $result = [];
    for ($i = 0, $len = count($coll); $i < $len; $i += $size) {
        $result[] = array_slice($coll, $i, $size);
    }

    return $result;
}
