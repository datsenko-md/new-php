<?php

/*Реализуйте функцию removeFirstLevel(), которая принимает на вход дерево, и
возвращает новое, элементами которого являются дети вложенных узлов(см .
пример) .*/

function removeFirstLevel($tree)
{
    $nodes = array_filter($tree, fn($node) => is_array($node));
    return array_merge(...$nodes);
}
