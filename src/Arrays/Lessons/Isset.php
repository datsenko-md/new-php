<?php

/*Реализуйте функцию get, которая извлекает из массива элемент по указанному
индексу, если индекс существует, либо возвращает значение по умолчанию.
Функция принимает на вход три аргумента:

Массив
Индекс
Значение по умолчанию (равно null)*/

function get($arr, $index, $default = null)
{
    if (array_key_exists($index, $arr)) {
        return $arr[$index];
    } else {
        return $default;
    }
}
