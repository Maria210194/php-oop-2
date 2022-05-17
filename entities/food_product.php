<?php

include_once __DIR__ . '/product.php';

class FoodProduct extends Product {

    public $foodType= 'wet'; //wet and dry
    public $expireDate;
    public $type= 'food';

    function __construct($_brand, $_name, $_price, $_foodType, $_expireDate){
        parent::__construct($_brand, $_name, $_price);  //parent per chiamare l'originale
        $this->foodType=$_foodType;
        $this->expireDate=$_expireDate;
        $this->type= 'food';
             
    }

}








?>