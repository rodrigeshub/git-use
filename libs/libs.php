<?php

$(){
    'asdasd';
}






























/*
abstract class Product
{
    //some abstract method
}


class ProductA extends Product
{

}

class ProductB extends Product
{

}


abstract class Abstractfactory
{
    public function getProd($prod)
    {
        if ($prod == 'A') {
            return new ProductA();
        }
        if ($prod == 'B') {
            return new ProductB();
        }
    }
}


class Factory extends Abstractfactory
{
}

$prod = new Factory();
$prod->getProd('A');



/*
class Guard
{
    private $_callback;

    public function __construct(Closure $callback)
    {
        $this->_callback = $callback;
    }

    public function __destruct()
    {
        call_user_func($this->_callback);
    }
}

$guard = new Guard(
    function () {
        echo 'destructor';
    }
);
unset($guard);


exit;

class ORMTable
{
    public static function find($id)
    {
        return new self($id); //one record from DB
    }
}

class RecordList
{
    protected static $instance = array();

    public static function getRecord($id)
    {
        if (is_null(self::$instance[$id])) {
            self::$instance[$id] = ORMTable::find($id);
        }
        returnself::$instance[$id];
    }
}

$city['Kiev'] = RecordList::getRecord(10);
$city['Moscow'] = RecordList::getRecord(20);


exit;

class DB
{
    protected static $instance = array();

    private function __construct($key)
    {
        //connect to $key DB
    }

    public static function getInstance($key)
    {
        if (is_null(self::$instance[$key])) {
            self::$instance[$key] = new self($key);
        }
        return self::$instance[$key];
    }

    public function query($sql)
    {

    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

$sql = 'some sql';
$mysql = DB::getInstance('mysql');
$mysql->query($sql);
$sqlite = DB::getInstance('sqlite');
$sqlite->query($sql);


exit;

class Phone
{
    private $_name;
    private $_os;

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function setOs($os)
    {
        $this->_os = $os;
    }
}

abstract class BuilderPhone
{
    protected $_phone;

    public function getPhone()
    {
        return $this->_phone;
    }

    public function createPhone()
    {
        $this->_phone = new Phone();
    }

    abstract public function buildName();

    abstract public function buildOs();
}

class BuilderNexus4 extends BuilderPhone
{
    public function buildName()
    {
        $this->_phone->setName('Nexus4');
    }

    public function buildOs()
    {
        $this->_phone->setOs("Android");
    }
}

class BuilderIphone5 extends BuilderPhone
{
    public function buildName()
    {
        $this->_phone->setName('Iphone5');
    }

    public function buildOs()
    {
        $this->_phone->setOs("iOs");
    }
}

class Chooser
{
    private $_builderPhone;

    public function setBuilderPhone(BuilderPhone $mp)
    {
        $this->_builderPhone = $mp;
    }

    public function getPhone()
    {
        return $this->_builderPhone->getPhone();
    }

    public function constructPhone()
    {
        $this->_builderPhone->createPhone();
        $this->_builderPhone->buildName();
        $this->_builderPhone->buildOs();
    }
}

$user = new Chooser();
$google = new BuilderNexus4();
$apple = new BuilderIphone5();
$user->setBuilderPhone($google);
$user->constructPhone();
$realPhone = $user->getPhone();


exit;

class Single
{
    public function __clone()
    {
    }
}

class Prototype
{
    public function getClone(Single $single)
    {
        return clone $single;
    }
}

$prototype = new Prototype();
$singleArray[] = $prototype->getClone(new Single());
var_dump($singleArray);


exit;

class LazyURL
{
    protected $_stringUrl;
    protected $_domain;


    public function __construct($stringUrl)

    {
        $this->_stringUrl = $stringUrl;

    }

    public function getDomain()
    {
        if (empty($this->_domain)) {
            $this->_domain = parse_url(
                $this->_stringUrl, 1);
        }
        return $this->_domain;
    }
}

$url = new LazyURL('http://google.com');
echo $url->getDomain();

exit;


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
    public function createProd($type)
    {
        if ($type == 'a') {
            return new ProductA();
        }
        if ($type == 'b') {
            return new ProductB();
        }
    }
}

class Factory extends Abstractfactory
{
}


$prod = new Factory();
var_dump($prod->createProd('a'));


exit;

class Singleton
{
    static private $_instance;

    private function __construct()
    {
    }

    static public function get()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
            return self::$_instance;
        }

        return self::$_instance;

    }

    private function __clone()
    {
    }
}

*/