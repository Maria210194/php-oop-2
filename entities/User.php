<?php

class User{
    public $name;
    public $surname;
    public $email;

    function __construct($_name,$_surname,$_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

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
    }



}
?>