<?php
include_once '../Model/LoginModel.php';

$loginModel = new LoginModel();

if (isset($_POST['empid']) && $_POST['password']) {
    $id = $_POST['empid'];
    $password = $_POST['password'];
    $user = $loginModel->Logincheck($id, $password);
    if ($user == 0) {

        $Message = urlencode("error ");
        header("location:../View/Index.php?Message=" . $Message);

    } else {
//        $button=$_POST['Logout'];
//        echo $button;

       // $Message = urlencode("successfully done ");
       // header("location:../View/Index.php?Message=" . $Message);

       if($_POST['type']=='Login'){
        $user=$loginModel->setLogin($id);
           if($user==true){
               $Message = urlencode("successfully logged in");
               header("location:../View/Index.php?Message=" . $Message);
           }
       } else {
            $user=$loginModel->setLogout($id);
           if($user==true){
               $Message = urlencode("successfully logged out");
               header("location:../View/Index.php?Message=" . $Message);
           }
       }



    }

}