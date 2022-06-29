<?php
class Item
{
    private $name = "Default Value";

    public function setName($hehe){
        return $this->name = $hehe;
    }
    public function getName(){
        return $this->name;
    }
}
