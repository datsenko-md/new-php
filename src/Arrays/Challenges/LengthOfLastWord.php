<?php

/*Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего
слова переданной на вход строки. Словом считается любая последовательность,
не содержащая пробелов.*/

function lengthOfLastWord($sentence)
{
    $words = explode(' ', trim($sentence));
    return strlen($words[count($words) - 1]);
}
