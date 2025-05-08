<?php


namespace Trait;

trait tUser{


    public function getInfo():string
    {
        return 'Я информация про объект';
    }

    public function __toString()
    {
        return $this->getInfo();
    }
}