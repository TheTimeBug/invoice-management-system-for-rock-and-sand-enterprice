var siteURL = "http://localhost/invms/";

function login() {
    var operation = "login";
    var formdata = $("#LoginForm").serialize();

    var data = "operation=" + operation + "&" + formdata;

    //alert(data);
    connect_ajax_con(data);
}

function logout() {
    var operation = "logout";
    var data = "operation=" + operation;
    connect_ajax_con(data);
}

function connect_ajax_con(data) {
    $.ajax({
        method: "POST",
        url: 'include/database/account_connection.php',
        data: data,
        success: function(return_data) {
            //alert(return_data);
            if (return_data == "Wrong Username or password") {
                document.getElementById("login_feedback").innerHTML = "Wrong Username or Password !!!";
            } else if (return_data == "Wrong Password") {
                document.getElementById("login_feedback").innerHTML = "Wrong Password !!!";
            } else if (return_data == "Login Sucessfull") {
                location.replace(siteURL);
            } else if (return_data == "logout Sucessfull") {
                location.replace("login.php");
            }

        }
    });
}