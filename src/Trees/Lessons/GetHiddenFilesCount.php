<?php

/*Реализуйте функцию getHiddenFilesCount(), которая считает количество
скрытых файлов в директории и всех поддиректориях. Скрытым файлом в Linux
системах считается файл, название которого начинается с точки.*/

use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getChildren;

// BEGIN (write your solution here)
function getHiddenFilesCount($node)
{
    if (isFile($node)) {
        if (isHidden(getName($node))) {
            return 1;
        }

        return 0;
    }

    $children = getChildren($node);
    return array_reduce($children, fn($acc, $child) => $acc + getHiddenFilesCount($child), 0);

    return array_sum($hiddenFilesCount);
}

function isHidden($name)
{
    return $name[0] === '.';
}
// END
