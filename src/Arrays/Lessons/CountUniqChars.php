<?php

/*Реализуйте функцию countUniqChars, которая получает на вход строку и считает,
сколько символов (уникальных символов) использовано в этой строке. Например,
в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — четыре
уникальных символа: 1, y, a и !.

Задание необходимо выполнить без использования функций array_unique и
count_chars.*/

function countUniqChars($text)
{
    $uniqChars = [];
    for ($i = 0, $length = strlen($text); $i < $length; $i++) {
        if (!in_array($text[$i], $uniqChars)) {
            $uniqChars[] = $text[$i];
        }
    }

    return count($uniqChars);
}
