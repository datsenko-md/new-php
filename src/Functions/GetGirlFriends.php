<?php

/*Реализуйте функцию getGirlFriends, которая принимает на вход список
пользователей и возвращает плоский список подруг всех пользователей
(без сохранения ключей). Друзья каждого пользователя хранятся в виде массива
в ключе friends. Пол доступен по ключу gender и может принимать значения
male или female.*/

function getGirlFriends($users)
{
    $allFriendsLists = array_map(fn($user) => $user['friends'], $users);
    $friends = flatten($allFriendsLists);
    $girls = array_filter($friends, fn($friend) => $friend['gender'] === 'female');
    return array_values($girls);
}
