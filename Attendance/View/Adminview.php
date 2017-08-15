<html>
<!--$admin=new AdminController();-->
<?php
include_once "../Controller/AdminController.php";

include_once "../Model/LoginModel.php";
$data = $loginModel->AdminView();


//$data= json_decode($user);


//echo  gettype($data);
?>

<head>

    <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">

    <script type="text/javascript" charset="utf8" src="/ DataTables/datatables.js"></script>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>


    <script type="text/javascript" charset="utf8" src="http://https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

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

                //$logout=date_create($row['logout']);
                //$diff=date_diff($login,$logout);
                //echo "<td>",$diff,"</td>";


                echo "</tr>";
            }

        ?>
        </tbody>

    </table>

</html>