<?php
require_once '../Model/LoginModel.php';


class TryAdmin{
    private $loginmodel;

    function TryAdmin(){
        $this->loginmodel = new LoginModel();

    }



    function  adminlogin(){
        echo "arka";

    }

}