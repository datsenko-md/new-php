<?php

/*Реализуйте функцию getTotalAmount. Функция принимает на вход в виде массива
кошелёк с деньгами и название валюты и возвращает сумму денег указанной валюты.

Реализуйте данную функцию используя управляющие инструкции.*/

function getTotalAmount($bills, $currency)
{
    $amount = 0;
    $offset = strlen($currency) + 1;
    foreach ($bills as $bill) {
        if (strpos($bill, $currency) === false) {
            continue;
        }

        $amount += getDenomination($bill, $offset);
    }

    return $amount;
}

function getDenomination($bill, $offset)
{
    return (int) substr($bill, $offset);
}
