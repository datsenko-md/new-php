<?php

/*Реализуйте набор функций, для работы со словарём, построенным на хеш-таблице.
Для простоты, наша реализация не поддерживает разрешение коллизий.

По сути в этом задании надо реализовать ассоциативный массив. По понятным
причинам использовать ассоциативные массивы для их создания нельзя.
Представьте что в языке ассоциативных массивов нет и мы их хотим добавить.

make() — создаёт новый словарь
set($map, $key, $value) — устанавливает в словарь значение по ключу. Работает
и для создания и для изменения. Функция возвращает true, если удалось
установить значение. При возникновении коллизии, функция никак не меняет
словарь и возвращает false.
get($map, $key, $defaultValue = null) — читает в словаре значение по ключу и
возвращает его. Параметр $defaultValue — значение, которое функция возвращает,
если в словаре нет ключа (по умолчанию равно null). При возникновении коллизии
функция также возвращает значение по умолчанию.
Функции set() и get() принимают первым параметром словарь. Передача идет по
ссылке, поэтому set() может изменить его напрямую.

Для полноценного погружения в тему, считаем, что массив в PHP может
использоваться только как индексированный массив.*/

function getIndex($key)
{
    return crc32($key) % 1000;
}

function hasCollision($map, $key)
{
    $index = getIndex($key);
    $currKey = $map[$index][0];
    return $currKey !== $key;
}

function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $index = getIndex($key);
    if (array_key_exists($index, $map) && hasCollision($map, $key)) {
        return false;
    }

    $map[$index] = [$key, $value];
    return true;
}

function get(&$map, $key, $defaultValue = null)
{
    $index = getIndex($key);
    if (!array_key_exists($index, $map) || hasCollision($map, $key)) {
        return $defaultValue;
    }

    [, $value] = $map[$index];
    return $value;
}
