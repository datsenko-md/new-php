<?php

/*Реализуйте функцию getManWithLeastFriends, которая принимает список
пользователей и возвращает пользователя, у которого меньше всего друзей.*/

function getManWithLeastFriends($users)
{
    if (empty($users)) {
        return null;
    }
    return \Funct\Collection\minValue($users, fn($user) => count($user['friends']));
}
