<?php
require_once '../Model/LoginModel.php';
require_once '../Model/AdminModel.php';
//class AdminController
//{
//
//    function AdminController(){
//        Admin();
//    }
//    public function Admin()
//    {
    $loginModel=new AdminModel();
    $check=new LoginModel();




    if (isset($_POST['empid']) && $_POST['password']) {
        $id = $_POST['empid'];
        $password = $_POST['password'];
        $user = $check->LogincheckAdmin($id, $password);
        if ($user == 0) {
            $Message = urlencode("error ");
            header("location:../View/Index.php?Message=" . $Message);
            return "arka";
        } else {
            $user = $loginModel->AdminView();
            echo json_encode($user);


           // $response = array();
           //$response['status'] =true;
           // echo "arka";

            //echo $user;
         // header("location:../View/Adminview.php?data=" . json_encode($user));
            header("location:../View/Adminview.php");


//            return json_encode($user);

            //$Message = urlencode("welcome admin ");
            // header("location:../View/Adminview.php?Message=" . $Message);

            //echo json_encode($user);

        }
//    }
//    }

}