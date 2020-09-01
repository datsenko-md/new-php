<?php

namespace Php\Php\OOPBasics\Lessons;

/*Реализуйте класс для работы с рациональными числами, включающий в себя
следующие методы:

Конструктор — принимает на вход числитель и знаменатель.
Метод getNumer() — возвращает числитель
Метод getDenom() — возвращает знаменатель
Сложение add() — прибавляет переданную дробь к дроби на которой был вызван
метод.
Вычитание sub() — находит разность между дробью на которой был вызван метод
и переданной дробью.
Нормализацию делать не надо!

Подобные абстракции, как правило, создаются неизменяемыми. Поэтому сделайте
так, чтобы методы add() и sub() возвращали новое рациональное число, а не
мутировали объект.*/

class Rational
{
    public $numer;
    public $denom;

    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer()
    {
        return $this->numer;
    }

    public function getDenom()
    {
        return $this->denom;
    }

    public function add(Rational $rat)
    {
        $numer = $this->getNumer() * $rat->getDenom() + $rat->getNumer() * $this->getDenom();
        $denom = $this->getDenom() * $rat->getDenom();

        return new Rational($numer, $denom);
    }

    public function sub(Rational $rat)
    {
        $numer = $this->getNumer() * $rat->getDenom() - $rat->getNumer() * $this->getDenom();
        $denom = $this->getDenom() * $rat->getDenom();

        return new Rational($numer, $denom);
    }
}
