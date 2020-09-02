<?php

/*Реализуйте функцию getQuestions(), которая принимает на вход текст
(полученный из редактора) и возвращает извлеченные из этого текста вопросы.
Это должна быть строчка в форме списка разделенных переводом строки вопросов
(смотрите секцию "Примеры").

Входящий текст разбит на строки и может содержать любые пробельные символы.
Некоторые из этих строк являются вопросами. Они определяются по последнему
символу: если это знак ?, то считаем строку вопросом.*/

function getQuestions(string $text)
{
    $lines = s($text)->replace("\r", '')->split("\n");
    $filteredLines = collect($lines)->filter(fn($line) => $line->endsWith('?'));
    return implode("\n", $filteredLines->all());
}

/*function getQuestions($text)
{
    $strings = explode("\n", $text);
    $result = [];

    foreach ($strings as $string) {
        $currStr = s($string)->collapseWhitespace();
        if ($currStr->endsWith('?')) {
            $result[] = "{$currStr}";
        }
    }

    return implode("\n", $result);
}*/
