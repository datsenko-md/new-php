<?php

/*Реализуйте функцию buildDefinitionList, которая генерирует html список
определений (теги dl, dt и dd) и возвращает получившуюся строку. При отсутствии
элементов в массиве функция возвращает пустую строку.*/

function buildDefinitionList($definitions)
{
    if (empty($definitions)) {
        return '';
    }

    $parts = [];
    foreach ($definitions as $definition) {
        $name = $definition[0];
        $description = $definition[1];
        $parts[] = "<dt>{$name}</dt><dd>{$description}</dd>";
    }

    $result = implode('', $parts);
    return "<dl>{$result}</dl>";
}
