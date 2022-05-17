<?php

class Product {
    private $description= '';
    protected $type= 'generic';

    private $brand;
    private $name;
    private $price = 0;


    function __construct($_brand, $_name, $_price){
        $this->brand= $_brand;
        $this->name= $_name;
        $this->price= $_price;
    }

    //permetto, in lettura, di vedere i valori private

    public function getBrand(){
        return $this->brand;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getType(){
        return $this->type;
    }






}



?>