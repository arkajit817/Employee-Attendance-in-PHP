<?php
include_once ('LoginModel.php');

$loginModel=new LoginModel();

//echo $id=$_POST['empid'];
//print_r($_REQUEST);


if(isset($_POST['empid']) && $_POST['password']){


    $id= $_POST['empid'];
    $password= $_POST['password'];
    $user= $loginModel->Logincheck($id,$password);
    echo $id;
    if($user){
        echo "wrong";

    }
    else{
        echo "<script> alert('wrong credentials')</script>";
    }
}