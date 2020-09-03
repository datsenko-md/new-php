<?php

namespace Php\Php\OOPBasics\Lessons\User;

/*В задании необходимо реализовать пользователей которым можно добавлять
адреса. Такое часто встречается в интернет магазинах, когда у одного
пользователя может быть набор разных адресов для доставки. Пользователь
и адрес представлены двумя классами:

App\User\Address
App\User

Реализуйте следующие публичные методы:

__construct($country, $city, $street)
getCountry()
getCity()
getStreet()
setCountry($country)
setCity($city)
setStreet($street)*/

class Address
{
    private $country;
    private $city;
    private $street;

    public function __construct($country, $city, $street)
    {
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }
}
