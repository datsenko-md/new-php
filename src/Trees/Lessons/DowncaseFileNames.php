<?php

namespace App\downcaseFileNames;

/*Реализуйте функцию downcaseFileNames(), которая принимает на вход
директорию (объект-дерево) и приводит имена всех файлов в этой и во всех
вложенных директориях к нижнему регистру. Результат в виде обработанной
директории возвращается наружу. Исходное дерево не изменяется.*/

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;
use function Php\Immutable\Fs\Trees\trees\getChildren;

// BEGIN (write your solution here)
function downcaseFileNames($tree)
{
    $name = getName($tree);
    $meta = getMeta($tree);

    if (isFile($tree)) {
        return mkFile(strtolower($name), $meta);
    }

    $children = getChildren($tree);
    $newChildren = array_map(fn($child) => downcaseFileNames($child), $children);

    return mkdir($name, $newChildren, $meta);
}
// END
