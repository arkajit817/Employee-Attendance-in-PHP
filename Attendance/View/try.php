<?php
require_once "../Model/AdminModel.php";
require_once "../Controller/TimeController.php";
//$test=new AdminModel();
$test=new TimeController();
$test->sendEmail();
