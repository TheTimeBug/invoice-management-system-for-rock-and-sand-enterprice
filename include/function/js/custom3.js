//client page
function entryCilent() {
    var operation = "client_entry";
    var formdata = $("#ClientEntry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
    //alert(data);
}

function client_update_modal(id) {
    data = "id=" + id;
    $('#updateMODAL').modal('show');
    $("#modalbody").load("include/modal/update/client_update.php", data);
}

function client_data_update() {
    var operation = "admin_data_update";
    var formdata = $("#updatedDATA").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
    //alert(data);
}

function openClientPageModal() {
    $('#CientPageModal').modal('show');
}

function closeClientPageModal() {
    $('#CientPageModal').modal('hide');
    document.getElementById("ClientEntry").reset();
}

function client_delete_modal_op(id) {
    data = "id=" + id;
    //alert(data);
    $('#deleteMODAL').modal('show');
    $("#deleteModalX").load("include/modal/delete/client_delete.php", data);
}

function client_data_update() {
    var operation = "client_data_update";
    var formdata = $("#ClientEntry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
    //alert(data);
}

function client_close_table_relode() {
    $('#updateMODAL').modal('hide');
    $("#myTable").load(location.href + " #myTable");

}

function client_delete_modal_close() {
    $('#deleteMODAL').modal('hide');
    $("#myTable").load(location.href + " #myTable");
}


function client_data_delete() {
    var operation = "client_data_delete";
    var formdata = $("#getdatadeletemodal").serialize();
    var data = "operation=" + operation + "&" + formdata;
    //alert(data);
    connect_ajax(data);
}


//Calculation cubic feet
function cubicFEET() {
    let hft = parseFloat(document.getElementById("hft").value);
    let hin = parseFloat(document.getElementById("hin").value);
    let wft = parseFloat(document.getElementById("wft").value);
    let win = parseFloat(document.getElementById("win").value);
    let lft = parseFloat(document.getElementById("lft").value);
    let lin = parseFloat(document.getElementById("lin").value);

    let h = (hft + (hin / 12));
    let w = (wft + (win / 12));
    let l = (lft + (lin / 12))
        //alert("H=" + h + ",W=" + w + ",L=" + l);

    let ans = h * w * l;

    document.getElementById("volume").value = ans;
}

function move_invoice_trash(id) {
    var operation = "move_invoice_trash";
    var data = "operation=" + operation + "&" + "id=" + id;
    connect_ajax(data);
}

function move_invoice_active(id) {
    var operation = "move_invoice_active";
    var data = "operation=" + operation + "&" + "id=" + id;
    connect_ajax(data);
}

function move_invoice_delete(id) {
    var operation = "move_invoice_delete";
    var data = "operation=" + operation + "&" + "id=" + id;
    connect_ajax(data);
}