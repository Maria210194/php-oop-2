<?php

include_once __DIR__ . '/user.php';
include_once __DIR__ . 'registered_user.php';

class Cart{
public $products= [];
public $user;
private $isRegisteredUser = false;

function __construct(){
    $this->user= new User();
}


function setRegisteredUser($_user){
    $this->user=$_user;
    $this-> isRegisteredUser = true;
}


function addProduct($_product){
    $this->products[]=$_product;
}


function emptyCart(){
    $this->products = [];
}


function checkOut(){
    $sum=0;

    foreach($this->products as $product){
        $sum += $product->getPrice();
    }
    $discount= $this->user->getDiscount();

    return $sum - ($sum*$discount/100);
}

}


?>
