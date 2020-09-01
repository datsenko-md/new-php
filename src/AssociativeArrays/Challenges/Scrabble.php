<?php

/*Реализуйте функцию scrabble, которая принимает на вход два параметра:
набор символов (строку) и слово, и проверяет, можно ли из переданного
набора составить это слово. В результате вызова функция возвращает true
или false.

При проверке учитывается количество символов, нужных для составления слова,
и не учитывается их регистр.*/

function scrabble($str, $word)
{
    $countStrChar = count_chars(strtolower($str), 1);
    $countWordChar = count_chars(strtolower($word), 1);
    $intersection = array_intersect($countStrChar, $countWordChar);

    foreach ($countWordChar as $key => $value) {
        if (!isset($intersection[$key]) || $value > $intersection[$key]) {
            return false;
        }
    }

    return true;
}
