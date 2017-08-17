<?php
require_once "../Config/Connect.php";
require_once  "../Model/AdminModel.php";


class TimeController{
    //private $link;
    private $link;


    function TimeController(){
        $this->link=new AdminModel();

    }

    public function sendEmail(){
        $data = $this->link->LessTime();

      foreach ($data as $row){
            $empid=$row['empid'];
            $login=date_create($row['login']);
            $logout=date_create($row['logout']);
            $diff=date_diff($login,$logout);
            if($diff<480){
                $to="arkajitchoudhury143@gmail.com";
                $subject="Attendance Report";
                $body="Less Attendance";
                $headers="From: Arkajitrocks@gmail.com";

                mail($to,$subject,$body,$headers);
            }
        }

    }


}