<?php

/*Реализуйте абстракцию для работы с рациональными числами включающую в себя
следующие функции:

Конструктор makeRational - принимает на вход числитель и знаменатель,
возвращает дробь.
Селектор getNumer - возвращает числитель
Селектор getDenom - возвращает знаменатель
Сложение add - складывает две переданные дроби
Вычитание sub - находит разность между двумя дробями
Не забудьте реализовать нормализацию дробей удобным для вас способом*/

function makeRational($numer, $denom)
{
    $gcd = gcd($numer, $denom);

    return [
        'numer' => $numer / $gcd,
        'denom' => $denom / $gcd
    ];
}

function getNumer($rat)
{
    return $rat['numer'];
}

function getDenom($rat)
{
    return $rat['denom'];
}

function add($rat1, $rat2)
{
    return makeRational(
        getNumer($rat1) * getDenom($rat2) + getNumer($rat2) * getDenom($rat1),
        getDenom($rat1) * getDenom($rat2)
    );
}

function sub($rat1, $rat2)
{
    return makeRational(
        getNumer($rat1) * getDenom($rat2) - getNumer($rat2) * getDenom($rat1),
        getDenom($rat1) * getDenom($rat2)
    );
}
