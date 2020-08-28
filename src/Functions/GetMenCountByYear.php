<?php

/*Реализуйте функцию getMenCountByYear(), которая принимает на вход список
пользователей и возвращает массив, в котором ключ это год рождения, а
значение это количество мужчин, родившихся в этот год.*/

function getMenCountByYear($users)
{
    $menfolk = array_filter($users, fn($user) => $user['gender'] === 'male');
    $years = array_map(fn($user) => date('Y', strtotime($user['birthday'])), $menfolk);

    return array_reduce($years, function ($acc, $year) {
        $acc[$year] = isset($acc[$year]) ? $acc[$year] + 1 : 1;
        return $acc;
    }, []);
}
