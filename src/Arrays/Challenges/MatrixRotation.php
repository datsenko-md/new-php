<?php

/*Реализуйте функции rotateLeft и rotateRight, которые поворачивают матрицу
влево (против часовой стрелки) и соответственно вправо (по часовой стрелке).*/

/*function rotateLeft($matrix)
{
    $rotated = [];
    for ($i = count($matrix[0]) - 1; $i >= 0; $i--) {
        $newRow = [];
        foreach ($matrix as $row) {
            $newRow[] = $row[$i];
        }
        $rotated[] = $newRow;
    }

    return $rotated;
}

function rotateRight($matrix)
{
    $rotated = [];
    for ($i = 0, $rows = count($matrix[0]) - 1; $i <= $rows; $i++) {
        $newRow = [];
        foreach ($matrix as $row) {
            $newRow[] = $row[$i];
        }
        $rotated[] = array_reverse($newRow);
    }

    return $rotated;
}*/

function rotate($matrix, $direction)
{
    $columnsCount = count($matrix);
    $rowsCount = count($matrix[0]);

    $rotated = [];

    for ($i = 0; $i < $columnsCount; $i++) {
        for ($j = 0; $j < $rowsCount; $j++) {
            if ($direction === 'left') {
                $rotated[$rowsCount - 1 - $j][$i] = $matrix[$i][$j];
            } else {
                $rotated[$j][$columnsCount - 1 - $i] = $matrix[$i][$j];
            }
        }
    }
    return $rotated;
}

function rotateLeft($matrix)
{
    return rotate($matrix, 'left');
}

function rotateRight($matrix)
{
    return rotate($matrix, 'right');
}
