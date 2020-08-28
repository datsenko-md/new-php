<?php

/*Реализуйте функцию slugify самостоятельно, не прибегая к
\Funct\Strings\slugify. Преобразования, которые она должна делать:

Приводить к нижнему регистру все символы в строке
Удалять все пробелы
Соединять слова с помощью дефисов*/

use Funct\Strings;
use Funct\Collection;

// BEGIN (write your solution here)
function slugify($str)
{
    $prepared = \Funct\Strings\toLower($str);
    $parts = explode(' ', trim($prepared));
    $parts = \Funct\Collection\without($parts, '');
    return implode('-', $parts);
}
