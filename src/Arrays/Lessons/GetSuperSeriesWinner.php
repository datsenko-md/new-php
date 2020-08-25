<?php

/*Реализуйте функцию getSuperSeriesWinner(scores), которая находит команду
победителя для конкретной суперсерии. Победитель определяется как команда у
которой больше побед (не количество забитых шайб) в конкретной серии. Функция
принимает на вход массив, в котором каждый элемент это массив описывающий счет
в конкретной игре (сколько шайб забила Канада и СССР). Результат функции –
название страны: 'canada', 'ussr'. Если суперсерия закончилась в ничью, то
нужно вернуть null.*/

function getSuperSeriesWinner($scores)
{
    $finalScore = 0;
    foreach ($scores as $score) {
        $canada = $score[0];
        $ussr = $score[1];
        $finalScore += $canada <=> $ussr;
    }

    if ($finalScore === 0) {
        return null;
    }

    return $finalScore > 0 ? 'canada' : 'ussr';
}
