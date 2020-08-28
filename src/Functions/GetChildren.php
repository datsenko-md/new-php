<?php

/*Реализуйте функцию getChildren, которая принимает на вход список
пользователей и возвращает плоский список их детей. Дети каждого пользователя
хранятся в виде массива в ключе children*/

function getChildren($users)
{
    $children = array_map(fn($user) => $user['children'], $users);
    return flatten($children);
}
