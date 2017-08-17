<?php
require_once "../Config/Connect.php";



class AdminModel
{


    private $link;
function  AdminModel(){
    $this->link = new Connect();
}
    public function AdminView()
    {
        echo
        $query = "select employeedet.Name,employeetime.login,employeetime.logout from employeetime LEFT JOIN employeedet on employeedet.ID=employeetime.empid";
        $res = $this->link->con->query($query);
        $response = array();
        //$dao=new EmployeeDao();


        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $data = array();
                $data['name'] = $row['Name'];
//                $name=;
                $data['login'] = $row['login'];
                $data['logout'] = $row['logout'];

                array_push($response, $data);

            }
        }

        return $response;

    }
    public  function  LessTime(){
        $current_time=date("Y-m-d H:i:s");
        //$timestamp = strtotime('today midnight');
        //$time_modified = date('Y-m-d 00:00:00', strtotime('-5 days', strtotime($current_time)));
        $time_modified=date('Y-m-d 00:00:00');
        //echo "select employeedet.Name,employeetime.login,employeetime.logout from employeetime LEFT JOIN employeedet on employeedet.ID=employeetime.empid where login between '$time_modified' and '$current_time'";
        $query="select employeedet.Name,employeetime.empid,employeetime.login,employeetime.logout from employeetime LEFT JOIN employeedet on employeedet.ID=employeetime.empid where login between '$current_time' and '$time_modified'";
      $res=$this->link->con->query($query);
        $response=array();
        if($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $data=array();
                $data['login'] = $row['login'];
                $data['logout'] = $row['logout'];
               // $data['empid']=$row['empid'];

                array_push($response, $data);


            }
        }
        return $response;
    }

}