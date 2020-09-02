<?php

namespace Php\Php\OODesign\Lessons;

/*Реализуйте класс Truncater с единственным методом truncate(). В классе уже
присутствует конфигурация по умолчанию:
const OPTIONS = [
    'separator' => '...',
    'length' => 200,
];
separator отвечает за символ(ы) добавляющиеся в конце, после обрезания
строки, а length это длина до которой происходит сокращение. Если строка
короче чем эта опция, то никакого сокращения не происходит. Конфигурацию по
умолчанию можно переопределить передав новую в конструктор (она мержится с
тем что в классе), а также через передачу конфигурации вторым параметром в
метод truncate(). Оба этих способа можно комбинировать.*/

class Truncater
{
    public const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    // BEGIN (write your solution here)
    private $options = [];

    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }

    public function truncate($text, $options = [])
    {
        $currOptions = array_merge($this->options, $options);
        $substr = substr($text, 0, $currOptions['length']);
        $endsWith = strlen($text) > strlen($substr) ? $currOptions['separator'] : '';
        return "{$substr}{$endsWith}";
    }
    // END
}
