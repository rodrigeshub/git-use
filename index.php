<?php

abstract class Product
{
}

class ProductA extends Product
{
}

class ProductB extends Product
{
}

abstract class Abstractfactory
{
    public function getProdType($type)
    {
        if ($type == 'A') {
            return new ProductA;
        }

        if ($type == 'B') {
            return new ProductB;
        }

    }
}

class Factory extends Abstractfactory{}

$prod=new Factory();
var_dump($prod->getProdType('A'));




exit;
var_dump(Singleton::getInstance());


class Singleton
{

    static private $_instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    static public function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}