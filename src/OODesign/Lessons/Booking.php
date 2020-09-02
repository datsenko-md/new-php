<?php

namespace Php\Php\OODesign\Lessons;

/*Реализуйте класс Booking, который позволяет бронировать номер отеля на
определённые даты. Единственный интерфейс класса — функция book(), которая
принимает на вход две даты в текстовом формате. Если бронирование возможно,
то метод возвращает true и выполняет бронирование (даты записываются во
внутреннее состояние объекта).

Класс CarbonPeriod не подключен в задаче по умолчанию, используйте интерфейс
объекта Carbon для работы с датами.*/

class Booking
{
    private $journal = [];

    public function book($dateIn, $dateOut)
    {
        $in = Carbon::createFromFormat('d-m-Y', $dateIn);
        $out = Carbon::createFromFormat('d-m-Y', $dateOut);

        if (!$this->isBookable($in, $out)) {
            return false;
        }

        $this->journal[] = ['dateIn' => $in, 'dateOut' => $out];
        return true;
    }

    private function isBookable(Carbon $dateIn, Carbon $dateOut)
    {
        if ($dateIn >= $dateOut) {
            return false;
        }

        foreach ($this->journal as ['dateIn' => $in, 'dateOut' => $out]) {
            if (($in < $dateOut) && ($out > $dateIn)) {
                return false;
            }
        }

        return true;
    }
}
