<?php

namespace Php\Php\OODesign\Lessons;

/*Реализуйте класс PasswordValidator ориентируясь на тесты.

Этот валидатор поддерживает следующие опции:

minLength (по-умолчанию 8) - минимальная длина пароля
containNumbers (по-умолчанию false) - требование содержать хотя бы одну цифру
Массив ошибок в ключах содержит название опции, а в значении текст указывающий
на ошибку (тексты можно подсмотреть в тестах)*/

class PasswordValidator
{
    // BEGIN (write your solution here)
    private const OPTIONS = [
        'minLength' => 8,
        'containNumbers' => false
    ];

    private $options = [];

    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }

    public function validate($password)
    {
        $errors = [];

        if (strlen($password) < $this->options['minLength']) {
            $errors['minLength'] = 'too small';
        }
        if (!$this->hasNumber($password) && $this->options['containNumbers']) {
            $errors['containNumbers'] = 'should contain at least one number';
        }

        return $errors;
    }
    // END

    private function hasNumber(string $subject): bool
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}
