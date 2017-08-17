<?php
require_once '../Model/LoginModel.php';

$loginmodel=new LoginModel();

if(isset($_POST['Name']) && $_POST['Password'] && $_POST['Role'] && $_POST['DOJ']){
  echo $Name=$_POST['Name'];
    $Password=$_POST['Password'];
    $Role=$_POST['Role'];
     $DOJ=$_POST['DOJ'];
    $id=rand(1000,9999);

    $user=$loginmodel->Register($id,$Name,$Password,$Role,$DOJ);
    //echo  $user;
    if($user){
        $Message ="Regsitered Successfully and your id is".$id;
        header("location:../View/Index.php?Message=" . $Message);    }

} else {
    $Message = "Some error";
    header("location:../View/Index.php?Message=" . $Message);
}