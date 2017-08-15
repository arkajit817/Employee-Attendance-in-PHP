
<?php
include 'Controller.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Cont  ent-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <title>Insert title here</title>
</head>
<body>
<h1>Attendance Management System</h1>

<h3> ${param.message}</h3>

<div >
    <form action="Controller.php" method="POST"  >

        <p>
            <label for="a">ID</label>
            <input id="empid" name="empid" required="required" type="text" placeholder="1234" />
        </p>

        <p>
            <label for="b">Password</label>
            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
        </p>

        <input type="submit" name="submit">Entry</input>



    </form>
</div>



<div class="register">


    <a href="Register.jsp">Register</a>
</div>

</body>
</html>


