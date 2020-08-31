<?php

/*Реализуйте абстракцию для работы с урлами. Она должна извлекать и менять
части адреса. Интерфейс:

make($url) - Конструктор. Создает урл.
setScheme($data, $scheme) - Сеттер. Меняет схему.
getScheme($data) - Селектор (геттер). Извлекает схему.
setHost($data, $host) - Сеттер. Меняет хост.
getHost($data) - Геттер. Извлекает хост.
setPath($data, $path) - Сеттер. Меняет строку запроса.
getPath($data) - Геттер. Извлекает строку запроса.
setQueryParam($data, $key, $value) - Сеттер. Устанавливает значение для
параметра запроса.
getQueryParam($data, $paramName, $default = null) - Геттер. Извлекает
значение для параметра запроса. Третьим параметром функция принимает
значение по умолчанию, которое возвращается тогда, когда в запросе не было
такого параметра
toString($data) - Геттер. Преобразует урл в строковой вид.*/

function make($url)
{
    $data = parse_url($url);
    $queryParams = [];
    if (array_key_exists('query', $data)) {
        parse_str($data['query'], $queryParams);
    }

    $data['queryParams'] = $queryParams;

    return $data;
}

function getScheme($data)
{
    return $data['scheme'];
}

function setScheme(&$data, $scheme)
{
    $data['scheme'] = $scheme;
}

function getHost($data)
{
    return $data['host'];
}

function setHost(&$data, $host)
{
    $data['host'] = $host;
}

function getPath($data)
{
    return $data['path'];
}

function setPath(&$data, $path)
{
    $data['path'] = $path;
}

function setQueryParam(&$data, $key, $value)
{
    $data['queryParams'][$key] = $value;
}

function getQueryParam($data, $key, $default = null)
{
    return $data['queryParams'][$key] ?? $default;
}

function toString($data)
{
    $queryString = http_build_query($data['queryParams']);
    $fullQueryString = $queryString ? "?{$queryString}" : '';
    $scheme = $data['scheme'];
    $host = $data['host'];
    $path = $data['path'];

    return "{$scheme}://{$host}{$path}{$fullQueryString}";
}
