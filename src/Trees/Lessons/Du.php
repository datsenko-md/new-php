<?php

namespace App\du;

/*Реализуйте функцию du(), которая принимает на вход директорию, а возвращает
список узлов вложенных, (директорий и файлов) в указанную директорию на один
уровень, и место, которое они занимают. Размер файла задается в метаданных.
Размер директории складывается из сумм всех размеров файлов, находящихся
внутри во всех подпапках. Сами папки размера не имеют.*/

use function Php\Immutable\Fs\Trees\trees\isDirectory;
use function Php\Immutable\Fs\Trees\trees\reduce;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;
use function Php\Immutable\Fs\Trees\trees\getChildren;

// BEGIN (write your solution here)
function du($tree)
{
    $mapped = array_map(fn($child) => [getName($child), getSize($child)], getChildren($tree));
    usort($mapped, function ($node1, $node2) {
        [, $size1] = $node1;
        [, $size2] = $node2;
        return $size2 <=> $size1;
    });

    return $mapped;
}

function getSize($tree)
{
    if (!isDirectory($tree)) {
        return getMeta($tree)['size'];
    }

    $children = getChildren($tree);
    return array_reduce($children, fn($acc, $child) => $acc + getSize($child), 0);
}
// END
