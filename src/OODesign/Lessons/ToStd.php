<?php

/*Реализуйте функцию toStd(), которая принимает на вход ассоциативный массив
и возвращает объект типа stdClass такой же структуры . Выполните задачу,
проставляя ключи и значения вручную без использования преобразования типа .*/

function toStd($properties)
{
    $obj = new \stdClass();
    foreach ($properties as $key => $value) {
        $obj->$key = $value;
    }

    return $obj;
}
