<?php
require_once "../Config/Connect.php";
//require_once "./EmployeeDao.php";

class LoginModel
{

    private $link;

    function LoginModel()
    {
        $this->link = new Connect();


    }

    public function Logincheck($id, $password)
    {
        $safeid = mysqli_real_escape_string($this->link->con, $id);
        $safepw = mysqli_real_escape_string($this->link->con, $password);

        //$stmt = $this->link->con->prepare("select * from employeedet where ID=" . $safeid . " and password='$safepw'");
        // $num_rows = $stmt->num_rows();

        $res = mysqli_query($this->link->con, "select * from employeedet where ID=" . $safeid . " and password='$safepw'");
        $num_rows = mysqli_num_rows($res);
        return $num_rows;
    }

    public function LogincheckAdmin($id, $password)
    {
        $safeid = mysqli_real_escape_string($this->link->con, $id);
        $safepw = mysqli_real_escape_string($this->link->con, $password);

        //$stmt = $this->link->con->prepare("select * from employeedet where ID=" . $safeid . " and password='" . $safepw. "' and Role='Admin'");

        //$num_rows = $stmt->num_rows();

        $res = mysqli_query($this->link->con, "select * from employeedet where ID=" . $id . " and password='" . $password . "' and Role='Admin'");
        $num_rows = mysqli_num_rows($res);
        return $num_rows;
    }

    public function AjaxCheck($id)
    {
        $res = mysqli_query($this->link->con, "select * from employeetime where empid=" . $id . " and logout is null");
//        echo (gettype($res));
//        return "hey";
//        echo "select * from employeetime where empid=".$id;
        $num_rows = mysqli_num_rows($res);
//        echo $num_rows;

        // MAKE JSON HERE WITH TWO KEYS;

        //sample = {numberOfRows: number, loginTime: data -> res}

        //RETRUN SAMPLE

        return $num_rows;
    }


    public function setLogin($id){

        $safeid = mysqli_real_escape_string($this->link->con, $id);
        $login_date = date("Y-m-d H:i:s");
        $query="insert into employeetime  (empid,login,logout) values ($safeid,'$login_date',NULL )";
        if($this->link->con->query($query)===true){
            return true;
        }


    }
    public  function setLogout($id){
        $safeid=mysqli_escape_string($this->link->con,$id);
        $logout_date=date("Y-m-d H:i:s");
        $query="UPDATE employeetime SET logout='$logout_date' WHERE empid=$safeid and logout is null";
        if($this->link->con->query($query)){
            return true;
        }
    }





    public  function Register($id,$name,$Password,$Role,$DOJ){
        $safepassword=mysqli_escape_string($this->link->con,$Password);
        $safeDOJ=mysqli_escape_string($this->link->con,$DOJ);
        $saferole=mysqli_escape_string($this->link->con,$Role);
        $safeName=mysqli_escape_string($this->link->con,$name);

        $safeid=mysqli_escape_string($this->link->con,$id);
        //echo $safepassword;
        //echo "insert into employeedet  (ID,Name,DOJ,Password,Role) values ($id,$safeName,$safeDOJ,$safepassword,$saferole)";
        $query="insert into employeedet  (ID,Name,DOJ,Password,Role) values ($safeid,'$safeName','$safeDOJ','$safepassword','$saferole')";
        if($this->link->con->query($query)===true){
            return true;
        }

    }
}
