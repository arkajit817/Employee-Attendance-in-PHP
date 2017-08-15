<?php

?>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
<h1> Admin</h1>
<h3>
    <?php
    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
    }
    ?>
</h3>

<form action="../Controller/AdminController.php" method="POST">

    <p>
        <label for="a">ID</label>
        <input id="empid" name="empid" required="required" type="text" placeholder="1234"/>
    </p>

    <p>
        <label for="b">Password</label>
        <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
    </p>

    <input type="submit"> </input>


</form>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script type="text/javascript" src="../JS/Script.js"></script>

</html>
