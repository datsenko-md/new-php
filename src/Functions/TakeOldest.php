<?php

/*Реализуйте функцию takeOldest, которая принимает на вход список пользователей
и возвращает самых взрослых. Количество возвращаемых пользователей задается
вторым параметром, который по-умолчанию равен единице.*/

function takeOldest($users, $n = 1)
{
    usort(
        $users,
        fn($user1,
        $user2) => $user1['birthday'] <=> $user2['birthday']
    );

    return firstN($users, $n);
}
