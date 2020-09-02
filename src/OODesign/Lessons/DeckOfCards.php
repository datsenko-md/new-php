<?php

namespace Php\Php\OODesign\Lessons;

/*Реализуйте класс DeckOfCards, который описывает колоду карт и умеет её мешать.
Конструктор класса принимает на вход массив, в котором перечислены номиналы
карт в единственном экземпляре, например, [6, 7, 8, 9, 10, 'king'].
Реализуйте публичный метод getShuffled(), с помощью которого можно получить
полную колоду в виде отсортированного случайным образом массива.*/

class DeckOfCards
{
    private $deck;

    public function __construct($types)
    {
        $this->deck = collect($types)->flatMap(fn($card) => array_fill(0, 4, $card));
    }

    public function getShuffled()
    {
        return $this->deck->shuffle()->all();
    }
}
