<?php
?>

<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">


</head>
<h1> Please fill the form</h1>

<div>
    <form action="../Controller/RegsiterController.php" method="POST">

        <p>
            <label for="b">Name</label>
            <input id="Name" name="Name" required="required" type="text" placeholder="Arkajit Choudhury"/>


        </p>
        <p>
            <label for="c">DOJ</label>
            <input id="DOJ" type="date" name="DOJ" required="required" id="date" placeholder="mm/dd/yyyy"></br>


        </p>

        <p>
            <label for="d">Password</label>
            <input id="Password" name="Password" required="required" type="password" placeholder="eg. X8df!90EO"/>
        </p>

        <p><select name="Role" id="Role">
                <option value="Software">Software</option>
                <option value="Analyst">Analyst</option>
                <option value="Consultant">Consultant</option>
            </select></br>

        </p>
        <input type="submit" value="Login" id="btnAddProfile" class="some" name=""Login" > </input>


    </form>
</div>

<script>
    $(function() {

        $( "#DOJ" ).validate();

        $( "[type=date]" ).datepicker({
            onClose: function() {
                $( this ).valid();
            }
        });
    });
</script>

</html>