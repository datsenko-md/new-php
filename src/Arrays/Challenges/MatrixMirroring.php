<?php

/*Реализуйте функцию getMirrorMatrix, которая принимает двумерный массив
(матрицу) и возвращает массив, изменённый таким образом, что правая половина
матрицы становится зеркальной копией левой половины, симметричной
относительно вертикальной оси матрицы. Для простоты условимся, что матрица
всегда имеет чётное количество столбцов и количество столбцов всегда равно
количеству строк.*/

function getMirrorMatrix($matrix)
{
    $mirrored = [];
    $size = count($matrix);
    $lastIndex = $size - 1;

    foreach ($matrix as $row) {
        $newRow = [];
        for ($i = 0, $center = $size / 2; $i < $center; $i++) {
            $newRow[$i] = $row[$i];
            $newRow[$lastIndex - $i] = $row[$i];
        }
        $mirrored[] = $newRow;
    }

    return $mirrored;
}
