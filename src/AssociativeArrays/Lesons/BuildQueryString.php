<?php

/*Реализуйте функцию buildQueryString, которая принимает на вход список
параметров и возвращает сформированный query string из этих параметров:
buildQueryString(['per' => 10, 'page' => 1 ]);
// → page=1&per=10
*/

function buildQueryString($params)
{
    ksort($params);
    $parts = [];
    foreach ($params as $key => $value) {
        $parts[] = "{$key}={$value}";
    }

    return implode('&', $parts);
}
