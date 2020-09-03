<?php

namespace Php\Php\OOPBasics\Lessons;

/*Реализуйте следующие публичные методы:

__construct($name)
addAddress(User\Address $address)
getAddresses()
getName()*/

class User
{
    private $name;
    private $addresses;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddresses()
    {
        return $this->addresses;
    }

    public function addAddress(User\Address $address)
    {
        $this->addresses[] = new User\Address(
            $address->getCountry(),
            $address->getCity(),
            $address->getStreet()
        );
    }
}
