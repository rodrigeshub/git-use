<?php

trait Params{
    public function addMageParams(){
        $this->speed='100';
        $this->streng='20';
        $this->agility='10';
        $this->hp='40';
        $this->mana='100';
    }
}



class Character{
    use Params;
    public function newHero(){
     $this->addMageParams();
    }
}

$char = new Character();
$char->newHero();
 