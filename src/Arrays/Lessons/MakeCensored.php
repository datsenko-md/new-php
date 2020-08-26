<?php

/*Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных
слов в предложении на последовательность $#%!
и возвращает полученную строку. Аргументы:

Текст
Набор стоп слов
Словом считается любая непрерывная последовательность символов, включая любые
спецсимволы (без пробелов).*/

function makeCensored($text, $stopWords)
{
    $words = explode(' ', $text);
    $parts = [];
    foreach ($words as $word) {
        $parts[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }

    return implode(' ', $parts);
}
