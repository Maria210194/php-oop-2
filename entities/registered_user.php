<?php

include_once __DIR__ . '/user.php';


class RegisteredUser extends User {

    public $password;
    protected $id= -1;
    protected $discount= 20;

    private $isLogged = false;


    function __construct($_email, $_password){
        $this->email= $_email;
        $this->password= $_password;
        $this->validateUser();
    }

    public function isValidUser(){
        return $this->isLogged;
    }


    private function validateUser(){
        //connessione al DB per verifica mail e password
        //se tutto ok valorizzo $this->id utente restituito  dal DB
        $this->id = 777;
        $this->isLogged = true;
    }


}




?>