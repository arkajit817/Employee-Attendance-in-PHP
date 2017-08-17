<html>
<!--$admin=new AdminController();-->
<?php
include_once "../Controller/AdminController.php";
include_once "../Controller/TimeController.php";

include_once "../Model/LoginModel.php";
include_once "../Model/AdminModel.php";
$data = $loginModel->AdminView();
$adminC=new TimeController();
$a=$adminC->sendEmail();


//$data= json_decode($user);


//echo  gettype($data);
?>

<head>

    <link rel="stylesheet" type="text/css" href="../CSS/Bootstrap.css">
    <script type="text/javascript" src="../JS/jQuery.js"></script>
    <script src="../JS/Bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Datatables.css">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
    <script src="../JS/DataTables.js"></script>


    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/jQueryDatatable.css">



<script src="../JS/jQueryDatatable.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">

    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
</head>
<h1>Employee Entry & Exit Time</h1>



    <table border="2" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Login</th>
            <th>Logout</th>
            <th>Diff</th>
        </tr>
        </thead>
        <tbody>
        <?php

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>",$row['name'],"</td>";
                echo "<td>",$row['login'],"</td>";
                echo "<td>",$row['logout'],"</td>";
                $login=date_create($row['login']);
                $loginformat=  date_format($login,'yyyy-mm-dd hh:mm:ss');
                $logout=date_create($row['logout']);
                $logoutformat=  date_format($logout,'yyyy-mm-dd hh:mm:ss');

                $diff=date_diff($login,$logout);

                echo "<td>",$diff->m,"</td>";



                echo "</tr>";
            }

        ?>
        </tbody>

    </table>

</html>