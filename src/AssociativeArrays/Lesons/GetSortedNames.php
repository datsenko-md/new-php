<?php

/*Реализуйте функцию getSortedNames, которая принимает на вход список
пользователей, извлекает их имена, сортирует и возвращает отсортированный
список имен.*/

function getSortedNames($users)
{
    $names = [];
    foreach ($users as ['name' => $name]) {
        $names[] = $name;
    }

    sort($names);
    return $names;
}
