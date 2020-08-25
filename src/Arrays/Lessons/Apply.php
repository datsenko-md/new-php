<?php

/*Реализуйте функцию apply, которая применяет указанную операцию к переданному
массиву и возвращает новый массив. Всего нужно реализовать три операции:

reset - Сброс массива
remove - Удаление значения по индексу
change - Обновление значения по индексу*/

function apply(array $arr, $operationName, $index = null, $value = null)
{
    // BEGIN (write your solution here)
    switch ($operationName) {
        case 'reset':
            return [];
        case 'remove':
            unset($arr[$index]);
            return $arr;
        case 'change':
            $arr[$index] = $value;
            return $arr;
    }
    // END
}
