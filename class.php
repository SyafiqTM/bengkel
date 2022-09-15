<?php

class Model{
    public $age = 10;
    public $customer;
    function __construct(){
    }

    function display_age(){
        return $this->age;
    }

    function add($number){
        $y = $number + 1;
        return $y;
    }
}