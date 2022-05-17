<?php

class CrediCard {

    private $code;
    private $cvv;
    private $expireDate;


function __construct($_code, $_cvv, $_expireDate){
    $this->expireDate = $_expireDate;
} 

public function isValid(){
    //codice per valutare se la date expireDate è antecedente a oggi
    return true; //è valida

}



}


?>