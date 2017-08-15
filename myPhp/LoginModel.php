<?php
require_once "Connect.php";

class LoginModel
{

    private $link;
function  LoginModel(){
    $this->link=new Connect();

}




public function Logincheck($id,$password){



    $res= mysqli_query($this->link->con,"select * from employeedet where ID=".$id. " and password='$password'");
   if($res){
   return true;

       }
       else {
           return false;
       }
   }







}
