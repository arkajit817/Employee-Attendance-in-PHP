<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Cont  ent-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">

<script src="../JS/jQuery.js"></script>
    <title>Insert title here</title>
</head>
<body>


<h1>Attendance Management System</h1>
<h3>
    <?php
    include '../Controller/LoginController.php';

    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
    }
    ?>
</h3>
<div>
    <form action="../Controller/LoginController.php" method="POST">

        <p>
            <label for="a">ID</label>
            <input id="empid" name="empid" required="required" type="text" placeholder="1234"/>
            <span id="box"> </span>

        </p>

        <p>
            <label for="b">Password</label>
            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
        </p>
        <input type="hidden" value="Login" id="hiddenType" name="type">
        <input type="submit" value="Login" id="btnAddProfile" class="some" name=""Login" > </input>


    </form>
</div>


<div class="register">
    <a href="Register.php">Register</a>


    <a href="AdminLogin.php">Admin</a>
</div>



<script src="../JS/jQuery3.1.0.js"></script>
<script type="text/javascript" src="../JS/Script.js"></script>

</body>
</html>


