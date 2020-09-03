<?php

namespace PhpTrees\Trees;

/**
 * Make directory node
 */
function mkdir(string $name, array $children = [], array $meta = [])
{
    return [
        "name" => $name,
        "children" => $children,
        "meta" => $meta,
        "type" => "directory",
    ];
}

/**
 * Make file node
 */
function mkfile(string $name, array $meta = [])
{
    return [
        "name" => $name,
        "meta" => $meta,
        "type" => "file",
    ];
}


/**
 * Return children
 * @example
 * getChildren(mkdir('etc')); // []
 * getChildren(mkdir('etc', [mkfile('name')])); // [<file>]
 */
function getChildren($node)
{
    return $node['children'];
}

/**
 * Return meta
 * @example
 * getMeta(mkfile('etc')); // []
 * getMeta(mkfile('etc', ['owner' => 'root'])); // ['owner' => 'root']
 */
function getMeta($node)
{
    return $node['meta'];
}

/**
 * Return name
 * @example
 * getName(mkfile('etc')); // etc
 * getName(mkdir('/')); // /
 */
function getName($node)
{
    return $node['name'];
}

/**
 * Test directory
 */
function isFile($node)
{
    return $node['type'] == 'file';
}

/**
 * Test file
 */
function isDirectory($node)
{
    return $node['type'] == 'directory';
}

/**
 * return flatten tree
 * @example
 * array_filter([1]); // [1];
 * array_filter([1, 2, [3, 4]]); // [1, 2, 3, 4];
 */
function array_flatten($tree)
{
    if (!is_array($tree)) {
        return false;
    }
    $result = [];
    foreach ($tree as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        } else {
            $result[] = $value;
        }
    }
    return $result;
}
