<?php

namespace Php\OOPBasics\Lessons;

/*Реализуйте класс App\Segment с двумя публичными свойствами beginPoint и
endPoint. Определите в классе конструктор.*/

class Segment
{
    public $beginPoint;
    public $endPoint;

    public function __construct(Point $a, Point $b)
    {
        $this->beginPoint = $a;
        $this->endPoint = $b;
    }
}
