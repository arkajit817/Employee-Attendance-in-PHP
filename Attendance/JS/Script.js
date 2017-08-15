jQuery(function ($) {
    var id = $('#empid').val();

    $('#empid').blur(function () {
        $.ajax({
            type: 'post',
            url: '../Controller/ScriptController.php',
            data: "id=" + $('#empid').val(),

            success: function (data) {
                data = JSON.parse(data);

                if (data.status) {
                    $("#btnAddProfile").val('Logout');
                    $("#hiddenType").val('Logout');
                    $("#box").text("log out please");


                }
                else {
                    // $("#btnAddProfile").val('Login');
                    // $("#btnAddProfile").attribute(class,"Logout");
                }
            }

        })

    })

    $("#form").submit(function (e) {
        e.preventDefault();
        console.log("called");
        var data = {};
        data.id = $('#empid').val();
        data.password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: "../Controller/AdminController.php",
            data: JSON.stringify(data),
            success: function (data) {
                data=JSON.parse(data);
                console.log(data);
                if(data.status){
                    console.log("arka")
                }
                   // window.location = "http://localhost:8080/Attendance/View/Adminview.php";
                // }


            }
        })
    });

    function myFunction(e) {
        console.log("arka");
        e.preventDefault();



        return false;

    }




})();


