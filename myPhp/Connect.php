<?php


class Connect
{
    public $con;
public function Connect(){
 require_once "Config.php";
    $con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    if(!$con)
    {
        echo "not success";
        //die("Cnt connect");

    }
    else {
        echo "yess";
    }
    $this->con=$con;
}
}