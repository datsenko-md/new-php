<?php

/*Реализуйте функцию compare($seq1, $seq2), которая сравнивает две строчки
набранные в редакторе. Если они равны то возвращает true, иначе - false.
Особенность строчек в том они могут содержать символ #, соответствующий
нажатию клавиши Backspace. Она означает, что нужно стереть предыдущий
имвол: abd##a# превращается в a.*/

function compare($seq1, $seq2)
{
    return deleteChars($seq1) === deleteChars($seq2);
}

function deleteChars($seq)
{
    $stack = new \Ds\Stack();
    for ($i = 0, $len = strlen($seq); $i < $len; $i++) {
        $currentChar = $seq[$i];
        if ($currentChar !== '#') {
            $stack->push($currentChar);
        } elseif (!$stack->isEmpty()) {
            $stack->pop();
        }
    }

    return implode('', $stack->toArray());
}
