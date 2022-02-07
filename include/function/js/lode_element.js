function lnewclient() {

    $("#nameAS").load("include/modal/select/ex_client.php");
}

function lode_ex_clint() {

    $('#modal_og').modal('show');
    $("#modalbody").load("include/modal/dataTABLE/select_customer.php");
    //$("#nameAS").load("include/modal/select/new_client.php");
}


function close_btn() {
    location.replace("?page=add_invoice");
}

function select_clint(id) {
    data = "id=" + id;
    document.getElementById("close_btn_secret").click();
    $("#nameAS").load("include/modal/select/ex_client.php", data);
}