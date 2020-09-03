<?php

/*Реализуйте функцию compressImages(), которая принимает на вход директорию,
находит внутри нее картинки и "сжимает" их. Под сжиманием понимается
уменьшение свойства size в метаданных в два раза. Функция должна вернуть
обновленную директорию со сжатыми картинками и всеми остальными данными,
которые были внутри этой директории.

Картинками считаются все файлы заканчивающиеся на .jpg.*/

function compressImages($tree)
{
    $children = getChildren($tree);
    $newChildren = array_map(function ($child) {
        $name = getName($child);
        if (!isFile($child) || !endsWith($name, '.jpg')) {
            return $child;
        }

        $meta = getMeta($child);
        $meta['size'] /= 2;

        return mkfile($name, $meta);
    }, $children);

    return mkdir(getName($tree), $newChildren, getMeta($tree));
}

function endsWith($str, $endStr)
{
    $len = strlen($endStr);
    return substr($str, -$len, $len) === $endStr;
}
