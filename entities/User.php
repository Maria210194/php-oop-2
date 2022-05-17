<?php

class User {
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $address;

    private $creditCard;

    protected $discount= 0;


    function __construct($_name,$_surname,$_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    public function setCard($_code, $_cvv, $_expireDate){
        $this->creditCard= new CrediCard($_code, $_cvv, $_expireDate);
        $this->creditCard->owner=$this->name . ' ' . $this->surname;
    }

    public function getDiscount(){
        return $this->discount;
    }

    /*
    public function getUserName(){
        return $this->name;
    }

    public function setUserName(){
        return $this->name=$name;
    }

    public function userSurname(){
        return $this->$surname;
    }
    public function userEmail(){
        return $this->email;
    } */

    



}
?>