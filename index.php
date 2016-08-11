<?php

var_dump(Singleton::getInstance());


class Singleton{

    static private $_instance;

    private function __construct(){
    }
    private function __clone(){
    }

    static public function getInstance(){
        if(self::$_instance===null){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}